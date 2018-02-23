<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016082100303304",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAyIorOEiJ6n2njLL2/P3HWo1c3lRAqRU6HHMybwhHnxqb1nXx525q16kSoHd+XQxtBjJ9Zzt8676mLEWlIxgLeThcyTTdQH88l7s3LX0L6r3hDYJ9PxhnmNlHEYEwZFKwhEbNGuXJQ6MLNrnIifGUJadm+zzRlva8WhMzY9/X4uXDrF/ZJvDK/6snJVUQJqcAlctm41DtrEGMPOyAI7uKmwTQ9coJG9zU6dEbXa0v29oJIbnmR2Og3m5Ndc71fS35RuhAQr4uzD2ohWtgrXeqpxRoGsbr4SeHh+pDiiqTx2/M/jNWM25ncVk4rcWU/qP5ury2GZhtD5yoszwFU+vPrQIDAQABAoIBAQCeCLRykEePMSKesFIPoPY/F/O9iWvDU2UOEoIGGeJHMbLpWN0fYlZ0SVrSdhhwv2ATaCqG9cxGA2H0tZWjiElSZ+ZG8ZACScK4V+LtyANiI+x8tv54gITzYRauZr558OgF9b2gmsD2ukAWCmZMvsHewoNXLeCFNT/NRCBVbos01DMWomNT+GfF2Sp2DU/X7GZpspcHnXjIjpCMJ4lwZcq+4t2WQrV1znQEX7Poxw9N+Zgw1VimULG3B3eUcaatQyVHaO6mDpWDbqxC51eWSvMQGB3zIhx+L41I2xW8QstRkTku2z3AGfb6dO3hzEX3WcQOntqLkRd7rSM5P/yuHR4BAoGBAOjMz5eXXd5kv8uIWhpqGKyl9krwbIfA5eG3GH5fIZzfpKbAe7atfqWu4toQSTTwGrYC7Eaxq/2MMiS/39GQ4ecmE6Qupo8TV5cRhDO9IJ2AICw6U+69mfBLyjo34SWUHmtYxl+zNti7fIGNZwIFra1UhvNFjZd/9+QoklSU7PXtAoGBANyGVVlzcLkzn90rJypVC+HrZ+/AtPMPTFqdgGMo8OpJ3cnIVW50VhsSWHp2RQT6ZTBkBcbdRvqr9R/wAxdHUznMxYzyA1Kp1sXfjB3F0+Mc9xQyN3MHy29H5pV715qmxP2Y6Zqnefk4cfQhozotiRUwMiqhyC36IgWsIBRZEwjBAoGBAOagSCPYa8DvNGaRLRov80POomF5LzuJqPNkbRp8ahM8J6Se2bCOzgGbcNcw/SU5nGymFqauS0HCysZHY5b8Hh/dQ+YJ5S2mrsZVLxAGlDIUBUtreUzxfnhkzPHB/AU7aKtV5ihWpcYubtj1WY/SSk2FiK+mPvBQcScR3m12oA29AoGAVgsoFB3h1rFY5+/leTPzzfOO+1IiiE/ox9Z6eLZJwfCOVCQRiWZlDm0LDsVEytt0TfxI8L336ujbXNnGKvgOdhf64LKxLzjLbyt5PUiqEwyDL2MklYJuEv5n7t2CU3pMlHJse4ZrJh2rAMl7KcEIorbKbC3xsFbPnYz6e1YCAkECgYANHODd2OaJtfto9bzfMhpvcCohc/Xj/thxZ+M2AVVooOQQz5mxbF3FaNg8AfVOel7j+wB/yB+6gRq/j2sETb1BDSP60e+oLHtzwHIpSL0hDsnWcNtNOnT+t/NI/gKjAeGr8Bdt1fdO7Qyqlycz0RBpECPMJmlk3yX8/8pqPUDI2g==",
		//签名方式
		'sign_type'=>"RSA2",
		//异步通知地址
		'notify_url' => "http://www.ydyk.com/",
		//http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/
		
		//同步跳转
		//'return_url' => "http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
		'return_url' => "http://www.ydyk.com/index.php?m=api&c=index&a=return_url",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		//'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
		//支付宝沙箱网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",


		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwEEW2wfkc05+ZtwaVpOaEAwCE1A3OIU1mJ+mdCZrc2plwMfcFGJG0oHzxDtAPwlVNPzrujDL2AEdOAsJrHGGqQVntmd2Dbr5Furl5LMpQdPxeyj0pumH+XpGwX+IWBqxrP267wGeY2Ic2FytTA4CnrqLYSNB3O7wFgjpeomCdKuNTOQldKOCgPUgofJx6NhX8EN2JuAjkCzy+PR4rVWZsrFQiTK38IsIFd6uffg1dw0IeUmLlGKCP65owMhF1KoG9Q67Eug3pmx4V0pKDhjr1jqUs9/OZA+L1ukh2LQvxkQlO7Rm3ixk3/bha+9ODwOw1NeBEKJEgZ0IzrmvmNyYswIDAQAB",
);