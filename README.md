Script này đơn giản chỉ là send message vào 1 group.

1.Nên ai dùng thì trc hết hãy request API Key ở trang: 
- Với User còn là Free: Có thể request trực tiếp tại :
<a href="https://www.chatwork.com/service/packages/chatwork/subpackages/api/apply_beta.php" title="API">Request Here</a>
- Với User đã lên Pro, muốn có API phải request qua bác Hirai, nhờ bác ý điền mail vào trang sau và gửi request: https://www.chatwork.com/service/packages/chatwork/subpackages/api/apply_beta.php
- Cần chờ 1 khoảng thời gian nhất định sau khi request thì mới đc cấp API.
Xem file ảnh <a href="https://github.com/nguyenvanvuong/reminder_bot/blob/master/Chatwork_API_Key.png" title="API">Chatwork_API_Key.png</a>

2.Sau khi có API key thì điền vào file script. 
- Nội dung message cũng đc hard code trong file script, mọi người mở ra tự sửa lại theo ý mình.
- ID của chatwork room chính là số trong link. Ex: [1234567] trong link [www.chatwork.com/#!rid1234567]

3.Việc cài cron thì mọi người có thể tự cài trên máy Ubuntu theo trình tự sau:
- Cài đặt crontab nếu chưa có:
<br />
<code># sudo apt-get install cron</code>
- Sửa file crontab:
<br />
<code># crontab -e</code>
- Thêm đoạn mã sau vào là scipt remind sẽ chạy định kỳ 1 tuần 1 lần vào thứ 6:
<br />
<code>* * * * */5 php /file_path/script.php</code>

- Restart crontab:
<br />
<code>sudo service cron restart</code>

PS: source code viết bằng PHP nên trên máy chạy script này phải được cài PHP, ai thích có thể sửa sang ngôn ngữ khác cho phù hợp.
