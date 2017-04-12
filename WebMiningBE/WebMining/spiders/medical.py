from urlparse import urljoin  # Python 2 only

import scrapy
from scrapy.http import Request


class MyItem(scrapy.Item):
    topic = scrapy.Field()
    symptoms = scrapy.Field()


class MedicalSpider(scrapy.Spider):
    name = "medical"

    allowed_domains = ['medlineplus.gov']
    start_urls = ['https://medlineplus.gov/encyclopedia.html']

    def parse(self, response):
        for link in response.css("ul.alpha-links li a::attr(href)").extract():
            yield Request(urljoin(response.url, link), callback=self.parse_alpha_page)

    def parse_alpha_page(self, response):
        for link in response.css("ul#index li a::attr(href)").extract():
            yield Request(urljoin(response.url, link), callback=self.parse_page)

    def parse_page(self, response):
        item = MyItem()

        item["topic"] = response.css('h1.with-also::text').extract_first()
        item["symptoms"] = response.css("article div#section-2 li::text").extract()

        yield item