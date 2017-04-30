from urlparse import urljoin  # Python 2 only

import scrapy
from scrapy.http import Request


class MyItem(scrapy.Item):
    topic = scrapy.Field()
    symptoms = scrapy.Field()
    tests = scrapy.Field()
    treatment = scrapy.Field()
    contact_doctor = scrapy.Field()
    prevention = scrapy.Field()


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
        item["symptoms"] = response.css("article div#section-2 li ::text").extract() or response.css("article div#section-2 p ::text").extract()
    #    item["tests"] =
    #    for list_item in response.css('article div#section-3 li ') :
    #       (''.join(list_item.css('::text').extract()))
        item["tests"] = response.css("article div#section-3 li ::text").extract() or response.css("article div#section-3 p ::text").extract()
        item["treatment"] = response.css("article div#section-4 li ::text").extract() or response.css("article div#section-4 p ::text").extract()
        item["contact_doctor"] = response.css("article div#section-7 li ::text").extract() or response.css("article div#section-7 p ::text").extract()
        item["prevention"] = response.css("article div#section-8 p ::text").extract() or response.css("article div#section-8 p ::text").extract()

        yield item