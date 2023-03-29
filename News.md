# API News

## API Create News

- Endpoint: `/user/news/create`
- Method: `POST`
- Request:

```json
{
    "title": "Người dân TP.HCM trong đợt nắng nóng 36 độ C",
    "image": file,
    "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" /></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\">Ng&agrave;y 28/3, TP.HCM tiếp tục bước v&agrave;o đợt nắng n&oacute;ng diện rộng. Nắng n&oacute;ng tạo ra ảo ảnh do hơi n&oacute;ng bốc l&ecirc;n tr&ecirc;n đường L&ecirc; Lợi (TP.HCM).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/uploads/store/info/16799862577udVu.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></p>\r\n\r\n<p><span style=\"font-size:16px\">Hai ng&agrave;y gần đ&acirc;y, cơ quan kh&iacute; tượng ghi nhận mức nhiệt độ cao nhất ở TP.HCM v&agrave; c&aacute;c tỉnh, th&agrave;nh Nam Bộ phổ biến 35-36 độ C, c&oacute; nơi tr&ecirc;n 36 độ C. Độ ẩm thấp nhất 40-55%. Thời gian nắng n&oacute;ng cao nhất trong ng&agrave;y từ 12h đến 16h.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986290S1a5w.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Dưới thời tiết nắng n&oacute;ng, nhiều người t&igrave;m m&igrave;nh nơi c&oacute; b&oacute;ng m&aacute;t trong l&uacute;c dừng chờ đ&egrave;n đỏ tại xa lộ H&agrave; Nội (TP Thủ Đức). H&igrave;nh ảnh n&agrave;y kh&ocirc;ng phải hiếm gặp tr&ecirc;n c&aacute;c tuyến đường tại TP.HCM khi nhiệt độ tăng cao.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/uploads/store/info/1679986319x2Vo1.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Cơ quan kh&iacute; tượng cảnh b&aacute;o nắng n&oacute;ng c&oacute; thể g&acirc;y mất nước, kiệt sức, đột quỵ do sốc nhiệt đối với cơ thể người khi tiếp x&uacute;c l&acirc;u với nhiệt độ cao. Ngo&agrave;i ra, do ảnh hưởng của nắng n&oacute;ng kết hợp với độ ẩm trong kh&ocirc;ng kh&iacute; giảm thấp, ch&aacute;y nổ v&agrave; hỏa hoạn ở khu vực d&acirc;n cư c&oacute; nguy cơ xảy ra.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>S&aacute;ch hay về m&ocirc;i trường</strong></p>\r\n\r\n<p><em><strong>How to Save Our Planet&nbsp;</strong></em>- Mark Maslin: T&aacute;c phẩm được v&iacute; như cuốn cẩm nang về c&aacute;c vấn đề c&ograve;n tồn tại v&agrave; c&aacute;c giải ph&aacute;p khả thi để cứu Tr&aacute;i Đất; trang bị cho người đọc những kiến thức khoa học mới nhất về biến đổi kh&iacute; hậu, t&iacute;nh bền vững v&agrave; c&aacute;c vấn đề m&agrave; ch&uacute;ng ta đang phải đối mặt.</p>\r\n\r\n<p><em><strong>We are the Weather: Saving the Planet Starts at Breakfast</strong></em>&nbsp;- Jonathan Safran Foer. T&aacute;c giả tin rằng mối li&ecirc;n hệ giữa ng&agrave;nh n&ocirc;ng nghiệp chăn nu&ocirc;i v&agrave; cuộc khủng hoảng kh&iacute; hậu hiện ra kh&ocirc;ng thực sự r&otilde; r&agrave;ng. Tuy nhi&ecirc;n, c&aacute;c h&agrave;nh động mang t&iacute;nh tập thể như giảm ti&ecirc;u thụ thịt c&oacute; thể đ&oacute;ng vai tr&ograve; quan trọng trong việc giảm lượng kh&iacute; thải carbon.</p>\r\n</blockquote>",
    "category_id": 1,
    "hashtag": "thoisu",
    "slug": "nguoi_dan_thanh_pho_hcm_trong_dot_nang_nong",
    "publish_date": "2023-03-31 14:00:00",
    "status": 1   
}
```

- Response

```json
{
    "data": {
        "id": 1,
        "title": "Người dân TP.HCM trong đợt nắng nóng 36 độ C",
        "image": "https://nta-app.s3.ap-northeast-1.amazonaws.com/dev/user/news/1/1660113023_Ic4wGYqCXh.jpg",
        "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt  nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" /></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\">Ng&agrave;y 28/3, TP.HCM tiếp tục bước v&agrave;o đợt nắng n&oacute;ng diện rộng. Nắng n&oacute;ng tạo ra ảo ảnh do hơi n&oacute;ng bốc l&ecirc;n tr&ecirc;n đường L&ecirc; Lợi (TP.HCM).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/uploads/store/info/16799862577udVu.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></p>\r\n\r\n<p><span style=\"font-size:16px\">Hai ng&agrave;y gần đ&acirc;y, cơ quan kh&iacute; tượng ghi nhận mức nhiệt độ cao nhất ở TP.HCM v&agrave; c&aacute;c tỉnh, th&agrave;nh Nam Bộ phổ biến 35-36 độ C, c&oacute; nơi tr&ecirc;n 36 độ C. Độ ẩm thấp nhất 40-55%. Thời gian nắng n&oacute;ng cao nhất trong ng&agrave;y từ 12h đến 16h.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986290S1a5w.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Dưới thời tiết nắng n&oacute;ng, nhiều người t&igrave;m m&igrave;nh nơi c&oacute; b&oacute;ng m&aacute;t trong l&uacute;c dừng chờ đ&egrave;n đỏ tại xa lộ H&agrave; Nội (TP Thủ Đức). H&igrave;nh ảnh n&agrave;y kh&ocirc;ng phải hiếm gặp tr&ecirc;n c&aacute;c tuyến đường tại TP.HCM khi nhiệt độ tăng cao.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/uploads/store/info/1679986319x2Vo1.jpg\" style=\"display:block; height:640px; margin-left:auto; margin-right:auto; width:960px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Cơ quan kh&iacute; tượng cảnh b&aacute;o nắng n&oacute;ng c&oacute; thể g&acirc;y mất nước, kiệt sức, đột quỵ do sốc nhiệt đối với cơ thể người khi tiếp x&uacute;c l&acirc;u với nhiệt độ cao. Ngo&agrave;i ra, do ảnh hưởng của nắng n&oacute;ng kết hợp với độ ẩm trong kh&ocirc;ng kh&iacute; giảm thấp, ch&aacute;y nổ v&agrave; hỏa hoạn ở khu vực d&acirc;n cư c&oacute; nguy cơ xảy ra.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>S&aacute;ch hay về m&ocirc;i trường</strong></p>\r\n\r\n<p><em><strong>How to Save Our Planet&nbsp;</strong></em>- Mark Maslin: T&aacute;c phẩm được v&iacute; như cuốn cẩm nang về c&aacute;c vấn đề c&ograve;n tồn tại v&agrave; c&aacute;c giải ph&aacute;p khả thi để cứu Tr&aacute;i Đất; trang bị cho người đọc những kiến thức khoa học mới nhất về biến đổi kh&iacute; hậu, t&iacute;nh bền vững v&agrave; c&aacute;c vấn đề m&agrave; ch&uacute;ng ta đang phải đối mặt.</p>\r\n\r\n<p><em><strong>We are the Weather: Saving the Planet Starts at Breakfast</strong></em>&nbsp;- Jonathan Safran Foer. T&aacute;c giả tin rằng mối li&ecirc;n hệ giữa ng&agrave;nh n&ocirc;ng nghiệp chăn nu&ocirc;i v&agrave; cuộc khủng hoảng kh&iacute; hậu hiện ra kh&ocirc;ng thực sự r&otilde; r&agrave;ng. Tuy nhi&ecirc;n, c&aacute;c h&agrave;nh động mang t&iacute;nh tập thể như giảm ti&ecirc;u thụ thịt c&oacute; thể đ&oacute;ng vai tr&ograve; quan trọng trong việc giảm lượng kh&iacute; thải carbon.</p>\r\n</blockquote>",
        "category_id": 1,
        "author_id": 51,
        "hashtag": "thoisu",
        "slug": "nguoi_dan_thanh_pho_hcm_trong_dot_nang_nong",
        "publish_date": "2023-03-31 14:00:00",
        "status": 1,
        "updated_at": "2023-03-29 13:40:52",
        "created_at": "2023-03-29 13:40:52"
    },
    "message": "Success",
    "status": 200
}
```

***

## API Update News

- Endpoint: `/user/news/update`
- Method: `POST`
- Request:

```json
{
    "id": 1,
    "title": "Người dân TP.HCM trong đợt nắng nóng 36 độ C",
    "image": file,
    "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt  nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" />",
    "category_id": 1,
    "hashtag": "thoisu",
    "slug": "nguoi_dan_thanh_pho_hcm_trong_dot_nang_nong",
    "publish_date": "2023-03-31 14:00:00",
    "status": 1
}
```

- Response:

```json
{
    "data": {
        "id": 1,
        "title": "Người dân TP.HCM trong đợt nắng nóng 36 độ C",
        "image": "https://nta-app.s3.ap-northeast-1.amazonaws.com/dev/user/news/1/1660113023_Ic4wGYqCXh.jpg",
        "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt  nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" />",
        "category_id": 1,
        "author_id": 51,
        "hashtag": "thoisu",
        "slug": "nguoi_dan_thanh_pho_hcm_trong_dot_nang_nong",
        "publish_date": "2023-03-31 14:00:00",
        "status": 1,
        "updated_at": "2023-03-29 13:50:52",
        "created_at": "2023-03-29 13:40:52"
    },
    "message": "Success",
    "status": 200
}
```

***

## API Delete News

- Endpoint: `/user/news/delete`
- Method: `POST`
- Request:

```json
{
    "id": 1
}
```

- Response:

```json
{
    "data": true,
    "message": "Success",
    "status": 200
}
```

***

## API List News

- Endpoint: `/user/news/list`
- Method: `POST`
- Request:

```json
{
    "offset": 0,
    "limit": 10
}
```

- Response:

```json
{
    "data": {
        "list": [
            {
                "id": 1,
                "title": "Người dân TP.HCM trong đợt nắng nóng 36 độ C",
                "image": "https://nta-app.s3.ap-northeast-1.amazonaws.com/dev/user/news/1/1660113023_Ic4wGYqCXh.jpg",
                "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt  nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" />",
                "category_id": 1,
                "author_id": 51,
                "hashtag": "thoisu",
                "slug": "nguoi_dan_thanh_pho_hcm_trong_dot_nang_nong",
                "publish_date": "2023-03-31 14:00:00",
                "status": 1,
                "updated_at": "2023-03-29 13:50:52",
                "created_at": "2023-03-29 13:40:52"
            },
            {
                "id": 2,
                "title": "Đồ uống càng nhiều đường, sức khỏe người Việt càng bị hủy hoại",
                "image": "https://nta-app.s3.ap-northeast-1.amazonaws.com/dev/user/news/2/124454grgrgXh.jpg",
                "body": "<p><strong><span style=\"font-size:16px\">TP.HCM đang bước v&agrave;o đợt  nắng n&oacute;ng gay gắt, nhiệt độ l&ecirc;n đến 35-36 độ C. Người d&acirc;n khi ra đường phải che chắn kỹ để tr&aacute;nh nắng.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><img alt=\"\" src=\"/storage/uploads/store/info/1679986215hlPza.jpg\" style=\"display:block; height:1232px; margin-left:auto; margin-right:auto; width:1920px\" />",
                "category_id": 2,
                "author_id": 51,
                "hashtag": "suckhoe",
                "slug": "do_uong_cang_nhieu_duong_suc_khoe_nguoi_viet_cang_bi_huy_hoai",
                "publish_date": "2023-03-31 00:00:00",
                "status": 1,
                "updated_at": "2023-03-29 14:00:00",
                "created_at": "2023-03-29 14:00:00"
            }
        ]
    },
    "message": "Success",
    "status": 200
}
```

***

## API News Detail

- Endpoint: `/user/news/detail`
- Method: `POST`
- Request:

```json
{
    "id": 1
}
```

- Response:

> page html