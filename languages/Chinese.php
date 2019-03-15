<?php
//======================================================================\\
// Author: Pricop Alexandru                                             \\
// Website: http://pricop.info                                          \\
// Email: pricop2008@yahoo.com                                          \\
// Language: English                                                    \\
//======================================================================\\

$LNG['user_success'] = '用户成功创建';
$LNG['user_exists'] = '用户名已经存在';
$LNG['email_exists'] = 'email已被使用';
$LNG['all_fields'] = '所有字段都是必需的';
$LNG['user_alnum'] = '用户名必须仅由字母和数字组成';
$LNG['user_too_short'] = '用户名必须在3到32个字符之间';
$LNG['user_limit'] = '从这个IP创建过多的帐户';
$LNG['invalid_email'] = '无效的email';
$LNG['invalid_user_pw'] = '用户名或密码错误';
$LNG['invalid_captcha'] = '验证码错误';
$LNG['activate_email'] = '激活链接已发送到您的email';
$LNG['account_activated'] = '您的帐户已激活';
$LNG['log_out'] = '注销';
$LNG['hello'] = '你好';
$LNG['register'] = '注册';
$LNG['login'] = '登录';
$LNG['connect'] = '联系';
$LNG['password'] = '密码';
$LNG['username'] = '用户名';
$LNG['email'] = 'Email';
$LNG['captcha'] = '验证码';
$LNG['username_or_email'] = '用户名或email';
$LNG['welcome_title'] = '青春树';
$LNG['welcome_desc'] = '那些被允许任性的年代叫做青春........';
$LNG['welcome_about'] = '认识ta，了解ta，爱上ta，结实那些在青春里走过路过留下的ta，一起欢乐悲伤成长，这是一个不一样的社区.';
$LNG['forgot_password'] = '忘记密码?';
$LNG['all_rights_reserved'] = '版权所有';

$LNG['welcome_one'] = '联系';
$LNG['welcome_two'] = '分享';
$LNG['welcome_three'] = '发现';
$LNG['welcome_one_desc'] = '联系你的家人和朋友，分享你的时光';
$LNG['welcome_two_desc'] = '分享属于你的青春';
$LNG['welcome_three_desc'] = '发现新的人，结交新朋友，建立新的联系';
$LNG['latest_users'] = '新用户';

// NOTIFICATION BOXES
$LNG['settings_saved'] = '保存';
$LNG['nothing_saved'] = '取消';
$LNG['password_changed'] = '更改密码';
$LNG['nothing_changed'] = '放弃';
$LNG['incorrect_date'] = '选定的日期无效，请选择正确的日期.';
$LNG['password_not_changed'] = 'The password was not changed.';
$LNG['image_saved'] = '密码更改失败';
$LNG['error'] = '错误';
$LNG['no_file'] = '你没有选择任何文件上传，或选定的文件（S）是空的.';
$LNG['file_exceeded'] = '选定的文件大小不能超过<strong>%s</strong> MB.';
$LNG['file_format'] = '选定的文件格式不支持. 上传 <strong>%s</strong>格式';
$LNG['image_removed'] = '删除图像';
$LNG['bio_description'] = '缺少字符.';
$LNG['valid_email'] = '请输入有效的email.';
$LNG['valid_url'] = '请输入正确的URL网址格式.';
$LNG['valid_country'] = '请输入有效的国家.';
$LNG['password_too_short'] = '密码至少包含6个字符.';
$LNG['password_not_match'] = '密码不匹配.';
$LNG['wrong_current_password'] = '您输入的当前密码不正确.';
$LNG['username_not_found'] = '无法找到指定用户名.';
$LNG['userkey_not_found'] = '用户名重置错误，请确保输入正确的密码.';
$LNG['password_reseted'] = '你已成功重置密码，你现在可以登陆使用新密码.';
$LNG['email_sent'] = 'Email已发送';
$LNG['email_reset'] = '一个包含密码重置指令的电子邮件已被发送，如果你不能在你的收件箱中找到，检查您的垃圾邮件箱，我们长达24小时提供消息.';
$LNG['user_has_been_deleted'] = '用户<strong>%s</strong>已删除.';
$LNG['user_not_exist'] = '所选用户不存在.';
$LNG['theme_changed'] = '变更主题';
$LNG['notif_saved'] = '变更通知';
$LNG['notif_success_saved'] = '通知已更新.';

// MAIL CONTENT
$LNG['welcome_mail'] = '欢迎使用 %s';
$LNG['user_created'] = '谢谢你加入<strong>%s</strong>.<br /><br />你的用户名: <strong>%s</strong><br />你的密码: <strong>%s</strong><br /><br />你可以登录: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = '密码恢复';
$LNG['recover_content'] = '一个密码恢复请求，如果你没有作出这个行动，请忽略这封email. <br /><br />你的用户名: <strong>%s</strong><br />你的恢复: <strong>%s</strong><br /><br />你可以重置你的密码访问下面的链接: <a href="%s/index.php?a=recover&r=1" target="_blank">%s/index.php?a=recover&r=1</a>';
$LNG['email_hello'] = '你好 <strong>%s</strong>,<br /><br />';
$LNG['email_unsub'] = '<br /><br /><span style="color: #aaa;">这个消息是自动发送的,如果你不想收到这些类型的电子邮件 from <strong>%s</strong> in the future, please <a href="%s">退订</a>.</span>';
$LNG['email_copy'] = '<br /><br /><span style="color: #aaa;">版权所有 &copy; '.date('Y').' <a href="%s">%s</a>.保留所有权利.';
$LNG['ttl_comment_email'] = '%s有你的消息评论';
$LNG['comment_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong>有关于你评论的 <strong><a href="%s">消息.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_email'] = '%s 喜欢你的消息';
$LNG['like_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 喜欢你的 <strong><a href="%s">消息.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_c_email'] = '%s 喜欢你的评论';
$LNG['like_c_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 喜欢你的 <strong><a href="%s">评论.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_new_friend_email'] = '已发送您的好友请求';
$LNG['new_friend_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 想成为你的好友 %s.'.$LNG['email_unsub'];
$LNG['ttl_friendship_confirmed_email'] = '%s 接受了你的好友请求';
$LNG['friendship_confirmed_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 已经接受了你的友谊%s.'.$LNG['email_unsub'];
$LNG['ttl_page_invite'] = '%s 邀请你喜欢的网页';
$LNG['page_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 邀请你喜欢的 <strong><a href="%s">%s</a></strong> page.'.$LNG['email_unsub'];
$LNG['ttl_group_invite'] = '%s 邀请你加入一个群组';
$LNG['group_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> 已邀请你加入 <strong><a href="%s">%s</a> group.</strong>'.$LNG['email_unsub'];
$LNG['ttl_suspended_account_mail'] = '您的帐户已被暂停使用';
$LNG['suspended_account_mail'] = $LNG['email_hello'].'您的帐户已被暂停，如果你认为这是一个错误，请与我们联系.'.$LNG['email_copy'];
$LNG['ttl_confirm_email'] = '激活你的帐号';
$LNG['confirm_email'] = $LNG['email_hello'].'感谢你的加入 <strong>%s</strong>. 完成你的注册<a href="%s" target="_blank">点击这里</a>.'.$LNG['email_copy'];

// PHP MODULES
$LNG['openssl_error'] = 'You must enable <strong>OpenSSL</strong> extension on the server';
$LNG['curl_error'] = 'Is recommended that <strong>cURL</strong> extension is enabled on the server';

// ADMIN PANEL
$LNG['general_link'] = '一般';
$LNG['security_link'] = '安全';
$LNG['manage_users'] = '用户管理';
$LNG['registration'] = '注册';
$LNG['limits'] = '限制';
$LNG['emails'] = 'Emails';

$LNG['theme_install'] = '要安装一个新的主题，将它上传到<strong>主题</strong> 文件夹';
$LNG['plugin_install'] = '要安装一个新的插件, 将它上传到 <strong>插件</strong> 文件夹';
$LNG['auhtor_title'] = '访问作者主页';
$LNG['version'] = '版本';
$LNG['active'] = '活动';
$LNG['activate'] = '启动';
$LNG['deactivate'] = '禁用';
$LNG['by'] = '通过';
$LNG['settings'] = '设置';

// FEED
$LNG['welcome_feed_ttl'] = '欢迎你的新闻';
$LNG['welcome_feed'] = '从你的朋友的所有职位将出现在这一页上，开始结交新的朋友.';
$LNG['leave_comment'] = '留下你的评论...';
$LNG['post'] = '帖子';
$LNG['view_more_messages'] = '加载更多';
$LNG['view_more_comments'] = '查看更多评论';
$LNG['delete_q_comment'] = '你确定要删除此评论吗?';
$LNG['delete_q_message'] = '你确定要删除这条消息吗?';
$LNG['delete_q_chat'] = '确实要删除此聊天信息吗?';
$LNG['report_this_comment'] = '报道评论';
$LNG['view_more'] = '查看更多';
$LNG['food'] = '我吃了: <strong>%s</strong>';
$LNG['visited'] = '我访问了:  <strong>%s</strong>';
$LNG['played'] = '我玩了: <strong>%s</strong>';
$LNG['watched'] = '我看了: <strong>%s</strong>';
$LNG['listened'] = '我听了: <strong>%s</strong>';
$LNG['shared_title'] = '分享<a href="%s" rel="loadpage"><strong>%s</strong></a>\'s <a href="%s" rel="loadpage"><strong>消息</strong></a>.';
$LNG['group_title'] = '公布<a href="%s" rel="loadpage"><strong>%s</strong></a> 群组.';
$LNG['form_title'] = '更新您的状态';
$LNG['comment_wrong'] = '发生了错误，请刷新页面重试.';
$LNG['comment_too_long'] = '对不起，每个注释所允许的最大字符是 <strong>%s</strong>.';
$LNG['comment_error'] = '对不起，我们不能发表评论，请刷新页面再试.';
$LNG['message_private'] = '对不起，这是私人信息，只有信息作者能看到它.';
$LNG['message_private_ttl'] = '私人信息';
$LNG['message_semi_private'] = '对不起，这个消息是私人的，只有朋友和这个消息的作者可以看到它.';
$LNG['message_semi_private_ttl'] = '私人信息';
$LNG['login_to_lcs'] = '登录到喜欢，评论和分享';
$LNG['message'] = '消息';
$LNG['comment'] = '评论';
$LNG['share'] = '分享';
$LNG['shared_success'] = '一直在你分享成功 <a href="%s" rel="loadpage"><strong>时间轴</strong></a>.';
$LNG['no_shared'] = '对不起，此信息不能分享.';
$LNG['share_desc'] = '你确定要在你的时间轴上分享这个消息吗?';
$LNG['cancel'] = '取消';
$LNG['close'] = '关闭';

// REPORT
$LNG['1_not_exists'] = '报道的消息不存在.';
$LNG['0_not_exists'] = '报道评论不存在.';
$LNG['1_already_reported'] = '此消息已被报道，并将在最短的时间内审查，谢谢.';
$LNG['0_already_reported'] = '此评论已被报道，并将在最短的时间内进行审查，谢谢.';
$LNG['1_is_safe'] = '此消息被标记为 <strong>安全</strong> 由管理员，谢谢你的反馈.';
$LNG['0_is_safe'] = '这个评论标记为 <strong>安全</strong> 由管理员，谢谢你的反馈.';
$LNG['1_report_added'] = '该消息已被报道，谢谢你的反馈.';
$LNG['0_report_added'] = '评论已被报道，谢谢你的反馈.';
$LNG['1_report_error'] = '对不起，在报告此消息的时候出错了，请刷新页面再试一次.';
$LNG['0_report_error'] = '对不起，在报告此评论的时候出错了，请刷新页面再试一次.';
$LNG['1_is_deleted'] = '该消息已被删除，谢谢你的反馈.';
$LNG['0_is_deleted'] = '评论已被删除，谢谢你的反馈.';
$LNG['rep_comment'] = '评论';

// SIDEBAR
$LNG['groups'] = '群组';
$LNG['events'] = '活动';
$LNG['archive'] = '档案';
$LNG['all_events'] = '所有的活动';
$LNG['sidebar_map'] = '地方';
$LNG['sidebar_food'] = '聚餐';
$LNG['sidebar_visited'] = '访问';
$LNG['sidebar_game'] = '游戏';
$LNG['sidebar_picture'] = '图片';
$LNG['sidebar_video'] = '视频';
$LNG['sidebar_music'] = '音乐';
$LNG['sidebar_shared'] = '分享';
$LNG['sidebar_pages'] = '页面';
$LNG['sidebar_groups'] = '群主';
$LNG['sidebar_pokes'] = '打开';
$LNG['all_time'] = '所有的时间';
$LNG['friends'] = '朋友';
$LNG['mutual' ] = '互动';
$LNG['welcome'] = '欢迎';
$LNG['filter_age'] = '年龄';
$LNG['all_ages'] = '所有年龄';
$LNG['filter_gender'] = '性别';
$LNG['sidebar_male'] = '男性';
$LNG['sidebar_female'] = '女性';
$LNG['all_genders'] = '所有性别';
$LNG['online_friends'] = '在线的朋友';
$LNG['sidebar_likes'] = '喜欢';
$LNG['sidebar_comments'] = '评论';
$LNG['sidebar_friendships'] = '友谊';
$LNG['sidebar_chats'] = '聊天';
$LNG['sidebar_birthdays'] = '生日';
$LNG['sidebar_suggestions'] = '朋友的建议';
$LNG['sidebar_trending'] = '热门话题';
$LNG['sidebar_friends_activity'] = '朋友的活动';
$LNG['friends_birthdays'] = '生日';
$LNG['sidebar_people'] = '人';
$LNG['sidebar_tag'] = '标签';

// MESSAGES / CHAT
$LNG['lonely_here'] = '在这里很孤独，交些朋友怎么样？';
$LNG['write_message'] = '写一个消息...';
$LNG['chat_too_long'] = '对不起，每个聊天信息所允许的最大字符是<strong>%s</strong>.';
$LNG['blocked_by'] = '无法发送该消息. <strong>%s</strong>阻止你.';
$LNG['blocked_user'] = '无法发送该消息。你已经封锁<strong>%s</strong>.';
$LNG['chat_self'] = '对不起，我们不能提供给你的聊天信息.';
$LNG['chat_no_user'] = '您必须选择一个用户聊天.';
$LNG['view_more_conversations'] = '查看更多对话';
$LNG['block'] = '阻滞';
$LNG['unblock'] = '解锁';
$LNG['poke'] = '打开';
$LNG['poked'] = '打开';
$LNG['conversation'] = '会话';
$LNG['start_conversation'] = '你可以通过选择一个人从你的好友里开始交谈t.';
$LNG['send_message'] = '发送消息';

// MESSAGE FORM
$LNG['label_food'] = '添加一个你在哪里吃的地方';
$LNG['label_game'] = '添加一个玩的游戏';
$LNG['label_visited'] = '添加一个访问过的位置';
$LNG['label_map'] = '添加一个地点';
$LNG['label_video'] = '分享一部电影，或从YouTube和Vimeo链接';
$LNG['label_music'] = '分享一首歌或者SoundCloud链接';
$LNG['label_image'] = '上传图片';
$LNG['message_form'] = '你想说什么?';
$LNG['file_too_big'] = '选定的文件大小（%s）太大，最大允许的文件大小是<strong>%s</strong>.';
$LNG['format_not_exist'] = '选定的文件 (%s) 格式无效, 请只上传<strong>%s</strong> 图像格式.';
$LNG['privacy_no_exist'] = '选定的隐私不存在，请刷新页面再试一次.';
$LNG['event_not_exist'] = '选定的事件不存在，请刷新页面再试一次.';
$LNG['change_privacy'] = '谁应该看到的信息';

$LNG['message_too_long'] = '对不起，每个消息所允许的最大字符是<strong>%s</strong>.';
$LNG['files_selected'] = '图像(s) 选择';
$LNG['too_many_images'] = '允许上传的每个消息的图像的最大数量是<strong>%s</strong>, 你试图上传 <strong>%s</strong>图像.';

// USER PANEL
$LNG['user_menu_general'] = '一般';
$LNG['user_menu_security'] = '密码';
$LNG['user_menu_avatar'] = '资料图片';
$LNG['user_menu_notifications'] = '通知';
$LNG['user_menu_privacy'] = '隐私';
$LNG['user_menu_blocked'] = $LNG['user_ttl_blocked'] = '阻止用户';
$LNG['other'] = '其他';

$LNG['user_ttl_general'] = '常规设置';
$LNG['user_ttl_security'] = '密码设置';
$LNG['user_ttl_avatar'] = '资料图片设置';
$LNG['user_ttl_notifications'] = '通知设置';
$LNG['user_ttl_privacy'] = '隐私设置';

$LNG['blocked_desc'] = '被封锁的人不能看到你时间轴上的消息或加你为好友.';

$LNG['ttl_first_name'] = $LNG['first_name'] = '名字';
$LNG['sub_first_name'] = '输入您的名字';

$LNG['ttl_last_name'] = $LNG['last_name'] = '姓';
$LNG['sub_last_name'] = '输入你的姓';

$LNG['ttl_email'] = 'Email';
$LNG['sub_email'] = 'Email不会被显示';

$LNG['address'] = '地址';
$LNG['sub_address'] = '你住的地址';

$LNG['ttl_location'] = '城市';
$LNG['sub_location'] = '你生活在城市';

$LNG['ttl_website'] = '网站';
$LNG['sub_website'] = '你的网站、博客或者个人主页';

$LNG['ttl_gender'] = '性别';
$LNG['sub_gender'] = '选择你的性别';

$LNG['interests'] = '兴趣';
$LNG['sub_interested_in'] = '你感兴趣的';

$LNG['ttl_country'] = '国家';
$LNG['sub_country'] = '你生活的国家';

$LNG['ttl_work'] = '职业';
$LNG['sub_work'] = '输入你正在工作的公司名称';

$LNG['ttl_school'] = '学校';
$LNG['sub_school'] = '输入你的学校名称';

$LNG['ttl_profile'] = '简介';
$LNG['sub_profile'] = '自我介绍';

$LNG['ttl_messages'] = '消息';
$LNG['sub_messages'] = '发布消息的默认方式';

$LNG['ttl_offline'] = '聊天状态';
$LNG['sub_offline'] = '聊天的可见性状态';

$LNG['ttl_facebook'] = '微博';
$LNG['sub_facebook'] = '你的微博网ID.';

$LNG['ttl_twitter'] = '微信';
$LNG['sub_twitter'] = '你的微信ID.';

$LNG['ttl_google'] = 'QQ';
$LNG['sub_google'] = '你的QQ账号.';

$LNG['ttl_bio'] = '简历';
$LNG['sub_bio'] = '关于你（160个字符或更少）';

$LNG['ttl_birthdate'] = '出生日期';
$LNG['sub_birthdate'] = '选择你出生的日期';

$LNG['ttl_upload_avatar'] = '上传选定的文件图像';
$LNG['ttl_delete_avatar'] = '删除选定的文件图像';

$LNG['privacy'] = '隐私';
$LNG['public'] = '公开';
$LNG['private'] = '私人';
$LNG['report'] = '报告';
$LNG['delete_message'] = '删除信息';
$LNG['remove_user'] = '删除用户';

$LNG['opt_offline_off'] = '在线（可用）';
$LNG['opt_offline_on'] = '总是离线';

$LNG['no_gender'] = '无性别';
$LNG['male'] = '男性';
$LNG['female'] = '女性';
$LNG['men'] = '男人';
$LNG['women'] = '女人';

$LNG['contact_information'] = '联系信息';
$LNG['basic_information'] = '基本信息';
$LNG['other_accounts'] = '其他账户';
$LNG['work_and_education'] = '工作和教育';

$LNG['ttl_upload'] = '上传';
$LNG['ttl_new_password'] = '新的密码';
$LNG['sub_new_password'] = '输入一个新的密码（至少有6个字符）';
$LNG['ttl_repeat_password'] = '重复密码';
$LNG['sub_repeat_password'] = '重复你的新密码';
$LNG['ttl_current_password'] = '当前的密码';
$LNG['sub_current_password'] = '输入您当前的密码';
$LNG['save_changes'] = '保存更改';
$LNG['profile_images_desc'] = '点击头像上传更改';
$LNG['confirm'] = '确认';
$LNG['approve'] = '批准';
$LNG['requests'] = '请求';
$LNG['blocked'] = '受阻';
$LNG['remove'] = '删除';
$LNG['decline'] = '下降';
$LNG['confirmed'] = '确认';
$LNG['declined'] = '拒绝';
$LNG['make_admin'] = '设置管理员';
$LNG['remove_admin'] = '删除管理员';

$LNG['ttl_notificationl'] = '喜欢的通知';
$LNG['sub_notificationl'] = '显示提醒和通知<strong>喜欢</strong>';

$LNG['ttl_notificationc'] = '评论通知';
$LNG['sub_notificationc'] = '显示提醒和通知 <strong>评论</strong>';

$LNG['ttl_notifications'] = '消息通知';
$LNG['sub_notifications'] = '显示消息和通知 <strong>共享信息</strong>';

$LNG['ttl_notificationd'] = '聊天通知';
$LNG['sub_notificationd'] = '显示信息和通知 <strong>聊天</strong>';

$LNG['ttl_notificationf'] = '朋友的通知';
$LNG['sub_notificationf'] = '显示信息和通知 <strong>确认朋友</strong>';

$LNG['ttl_notificationx'] = '页面通知';
$LNG['sub_notificationx'] = '显示信息和通知 <strong>喜欢的页</strong> 邀请';

$LNG['ttl_notificationg'] = '组的通知';
$LNG['sub_notificationg'] = '显示信息和通知 <strong>组的邀请</strong>';

$LNG['ttl_notificationp'] = '打开通知';
$LNG['sub_notificationp'] = '显示信息和通知 <strong>打开</strong>';

$LNG['ttl_sound_nn'] = '通知声音';
$LNG['sub_sound_nn'] = '当收到一个新的通知时播放的声音';

$LNG['ttl_sound_nc'] = '聊天的声音';
$LNG['sub_sound_nc'] = '接收一个新的聊天消息时播放的声音';

$LNG['ttl_email_comment'] = '评论邮件';
$LNG['sub_email_comment'] = '当有人在你的留言留言时你收到的邮件';

$LNG['ttl_email_like'] = '喜欢邮件';
$LNG['sub_email_like'] = '有人喜欢你的消息时收到的电子邮件';

$LNG['ttl_email_new_friend'] = '朋友邮件';
$LNG['sub_email_new_friend'] = '当有人发送或确认一个朋友的请求时收到的电子邮件';

$LNG['ttl_email_page'] = '页面邀请邮件';
$LNG['sub_email_page'] = '当有人邀请你喜欢一个页面的电子邮件';

$LNG['ttl_email_group'] = '组邀请邮件';
$LNG['sub_email_group'] = '当有人向你发送一组邀请时，收到的电子邮件';

$LNG['user_ttl_sidebar'] = '设置';

// ADMIN PANEL
$LNG['admin_login'] = '管理员登录';
$LNG['admin_user_name'] = '用户名';
$LNG['desc_admin_user'] = '输入您的管理员用户名';
$LNG['admin_pass'] = '密码';
$LNG['desc_admin_pass'] = '输入您的管理员密码';
$LNG['admin_ttl_sidebar'] = '菜单';
$LNG['admin_menu_logout'] = '注销';
$LNG['admin_ttl_dashboard']			= $LNG['admin_menu_dashboard']		= '控制板';
$LNG['admin_ttl_site_settings'] 	= $LNG['admin_menu_site_settings'] 	= '网站设置';
$LNG['admin_ttl_themes'] 			= $LNG['admin_menu_themes'] 		= '主题';
$LNG['admin_ttl_plugins'] 			= $LNG['admin_menu_plugins'] 		= '插件';
$LNG['admin_ttl_stats'] 			= $LNG['admin_menu_stats'] 			= '统计';
$LNG['admin_ttl_security'] 			= $LNG['admin_menu_security'] 		= '密码';
$LNG['admin_ttl_users'] 			= $LNG['admin_menu_users'] 			= '用户管理';
$LNG['admin_ttl_manage_pages']		= $LNG['admin_menu_manage_pages']	= '管理页面';
$LNG['admin_ttl_manage_groups']		= $LNG['admin_menu_manage_groups'] 	= '管理组';
$LNG['admin_ttl_manage_reports']	= $LNG['admin_menu_manage_reports'] = '管理报告';
$LNG['admin_ttl_manage_ads']		= $LNG['admin_menu_manage_ads'] 	= '广告管理';

$LNG['list_users'] = '所有用户';
$LNG['list_moderators'] = '版主';
$LNG['list_verified'] = '验证';
$LNG['list_suspended'] = '暂停';

$LNG['title'] = '标题';
$LNG['admin_sub_title'] = '站点的标题';

$LNG['admin_ttl_captcha'] = '验证码';
$LNG['admin_sub_captcha'] = '启用验证码注册';

$LNG['admin_ttl_timestamp'] = '时间轴';
$LNG['admin_sub_timestamp'] = '消息、评论和聊天的时间轴类型';

$LNG['admin_ttl_msg_perpage'] = '消息';
$LNG['admin_sub_msg_perpage'] = '每页的消息数';

$LNG['admin_ttl_com_perpage'] = '评论';
$LNG['admin_sub_com_perpage'] = '评论/消息的数量';

$LNG['admin_ttl_chat_perpage'] = '聊天';
$LNG['admin_sub_chat_perpage'] = '每页的聊天会话数';

$LNG['admin_ttl_smiles'] = '表情符号';
$LNG['admin_sub_smiles'] = '允许对信息变换简码，评论和聊天为表情符号';

$LNG['admin_ttl_email_activation'] = '邮箱激活';
$LNG['admin_sub_email_activation'] = '要求帐户被激活通过电子邮件';

$LNG['admin_ttl_nperpage'] = '通知';
$LNG['admin_sub_nperpage'] = '要显示的通知的数量（通知页）';

$LNG['admin_ttl_msg_limit'] = '信息字符';
$LNG['admin_sub_msg_limit'] = '每个消息允许的字符数';

$LNG['admin_ttl_chat_limit'] = '聊天的字符';
$LNG['admin_sub_chat_limit'] = '每个会话中允许的字符数';

$LNG['admin_ttl_email_reg'] = '电子邮件注册';
$LNG['admin_sub_email_reg'] = '注册电子邮件用户';

$LNG['admin_ttl_notificationsm'] = '短信通知';
$LNG['admin_sub_notificationsm'] = '更新新消息的间隔（以秒为单位）';

$LNG['admin_ttl_notificationsn'] = '事件通知';
$LNG['admin_sub_notificationsn'] = '更新间隔以检查新事件通知（以秒为单位）';

$LNG['admin_ttl_chatrefresh'] = '聊天刷新';
$LNG['admin_sub_chatrefresh'] = '时间多久聊天窗口更新新的消息（秒）';

$LNG['admin_ttl_timeonline'] = '在线用户';
$LNG['admin_sub_timeonline'] = '从最后一个用户的活动（在秒）以来被认为是在线的时间的数量';

$LNG['admin_ttl_image_profile'] = '图像大小（轮廓）';
$LNG['admin_sub_image_profile'] = '允许上传的图像大小(profile image, profile cover, group cover) (in MB)';

$LNG['admin_ttl_image_format'] = '图像格式（配置文件）';
$LNG['admin_sub_image_format'] = '允许上传的图像格式profile image, profile cover, group cover), 只使用GIF、PNG、JPG等格式不支持';

$LNG['admin_ttl_message_image'] = '图像大小（消息）';
$LNG['admin_sub_message_image'] = '允许上传的图像大小（消息）(in MB)';

$LNG['admin_ttl_message_format'] = '图像格式（消息）';
$LNG['admin_sub_message_format'] = '图像格式允许上传（消息），只使用GIF、PNG、JPG等格式不支持';

$LNG['admin_ttl_censor'] = '审查';
$LNG['admin_sub_censor'] = '被审查的话(divided by \',\' [comma])';

$LNG['admin_ttl_ad1'] = '广告单元1';
$LNG['admin_sub_ad1'] = '广告单元1（底部[欢迎页]）';

$LNG['admin_ttl_ad2'] = '广告单元2';
$LNG['admin_sub_ad2'] = '广告单元2（侧边栏[新闻页]）';

$LNG['admin_ttl_ad3'] = '广告单元3';
$LNG['admin_sub_ad3'] = '广告单元（边栏[组] 3页）';

$LNG['admin_ttl_ad4'] = '广告单元4';
$LNG['admin_sub_ad4'] = '广告单元4（侧边栏[主页]）';

$LNG['admin_ttl_ad5'] = '广告单元5';
$LNG['admin_sub_ad5'] = '广告单元5（[信息]栏页）';

$LNG['admin_ttl_ad6'] = '广告单元6';
$LNG['admin_sub_ad6'] = '广告单元6（侧边栏[搜索]）';

$LNG['admin_ttl_fbapp'] = 'Facebook登录';
$LNG['admin_sub_fbapp'] = '允许用户登录使用Facebook';

$LNG['admin_ttl_fbappid'] = 'App ID';
$LNG['admin_sub_fbappid'] = 'Facebook App ID';

$LNG['admin_ttl_fbappsecret'] = 'App Secret'; 
$LNG['admin_sub_fbappsecret'] = 'Facebook App Secret';

$LNG['smtp_emails'] = 'SMTP邮件';
$LNG['smtp_sub_emails'] = '启用SMTP发送邮件';

$LNG['smtp_host'] = 'SMTP主机';
$LNG['smtp_sub_host'] = 'The SMTP Host';

$LNG['smtp_port'] = 'SMTP端口';
$LNG['smtp_sub_port'] = 'The SMTP Port';

$LNG['smtp_auth'] = 'SMTP认证';
$LNG['smtp_sub_auth'] = '启用SMTP认证';

$LNG['smtp_username'] = 'SMTP用户名';
$LNG['smtp_sub_username'] = 'The SMTP Username';

$LNG['smtp_password'] = 'SMTP密码';
$LNG['smtp_sub_password'] = 'The SMTP Password';

$LNG['admin_ttl_edit'] = '编辑';
$LNG['admin_ttl_edit_profile'] = '编辑配置文件';

$LNG['admin_ttl_delete'] = '删除';
$LNG['admin_ttl_delete_profile'] = '删除配置文件';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = '用户名';
$LNG['admin_ttl_id'] = 'ID'; // As in user ID

$LNG['admin_ttl_email_comment'] = '评论邮件';
$LNG['admin_sub_email_comment'] = '有人评论留言时发送邮件（覆盖用户的设置）';

$LNG['admin_ttl_email_like'] = '喜欢邮件';
$LNG['admin_sub_email_like'] = '当有人喜欢一个消息时发送邮件（覆盖用户的设置）';

$LNG['admin_ttl_email_new_friend'] = '朋友电子邮件';
$LNG['admin_sub_email_new_friend'] = '当有人发送或确认好友请求时发送邮件（覆盖用户的设置）';

$LNG['admin_ttl_email_page'] = '页面邀请邮件';
$LNG['admin_sub_email_page'] = '当有人向你发送页面邀请时使发送邮件（覆盖用户的设置）';

$LNG['admin_ttl_email_group'] = '组邀请邮件';
$LNG['admin_sub_email_group'] = '当有人发送了一组邀请时发送邮件（覆盖用户的设置）';

$LNG['admin_ttl_ilimit'] = '最大图像';
$LNG['admin_sub_ilimit'] = '允许每个消息上传的最大图像';

$LNG['admin_ttl_wholiked'] = '喜欢';
$LNG['admin_sub_wholiked'] = '要显示的配置文件的数量接近于喜欢的数字';

$LNG['admin_ttl_sperpage'] = '用户';
$LNG['admin_sub_sperpage'] = '将要显示的用户数（配置文件的朋友，组用户）';

$LNG['admin_ttl_aperip'] = '账户';
$LNG['admin_sub_aperip'] = '允许注册每IP的帐户数（0无限）';

$LNG['admin_ttl_ronline'] = '在线的朋友';
$LNG['admin_sub_ronline'] = '要显示在饲料/订阅页面的在线好友数（栏）.';

$LNG['admin_ttl_nperwidget'] = '下拉通知';
$LNG['admin_sub_nperwidget'] = '要显示每类的通知数（如喜欢，注释，消息，共享，朋友请求）';

$LNG['admin_ttl_uperpage'] = '管理员';
$LNG['admin_sub_uperpage'] = '每页的用户数（管理部分）';

$LNG['admin_sub_verified'] = '默认验证的用户配置文件？（不推荐）';
$LNG['admin_sub_tracking'] = '分析跟踪代码';

$LNG['join_date'] = '加入日期';
$LNG['user_group'] = '用户组';
$LNG['ttl_verified'] = '验证';

$LNG['per_page'] = '/ 页';
$LNG['per_ip'] = '/ IP';
$LNG['second'] = '秒';
$LNG['seconds'] = '秒';
$LNG['minute'] = '分钟';
$LNG['minutes'] = '分钟';
$LNG['hour'] = '小时';
$LNG['recommended'] = '推荐';
$LNG['edit_user'] = '编辑用户';
$LNG['username_to_edit'] = '用户名';
$LNG['username_to_edit_sub'] = '输入要编辑的用户名';
$LNG['group_to_edit'] = '组名';
$LNG['group_to_edit_sub'] = '输入要编辑的组名';
$LNG['page_to_edit'] = '页面名称';
$LNG['page_to_edit_sub'] = '输入要编辑的页面名称';

// STATS
$LNG['likes'] = '喜欢';
$LNG['messages'] = '消息';
$LNG['comments'] = '评论';
$LNG['registered_users'] = '注册用户';
$LNG['today'] = '今天';
$LNG['this_week'] = '本周';
$LNG['this_month'] = '本月';
$LNG['this_year'] = '今年';
$LNG['total'] = '总';
$LNG['total_likes'] = '总赞';

$LNG['messages_posted'] = '已发布的信息';
$LNG['comments_posted'] = '评论';
$LNG['stats_reports'] = '报告';
$LNG['total_reports'] = '总报告';
$LNG['pending_reports'] = '申请报告';
$LNG['safe_reports'] = '安全报告';
$LNG['deleted_reports'] = '删除报告';
$LNG['liked_messages'] = '喜欢的消息';
$LNG['shared_messages'] = '分享信息';
$LNG['groups_created'] = '组的创建';
$LNG['pages_created'] = '创建的页面';

// DASHBOARD
$LNG['admin_panel'] = '管理面板';
$LNG['at_a_glance'] = 'At a glance';
$LNG['site_info'] = '站点信息';
$LNG['site_version'] = '<a href="%s" target="_blank">%s</a> %s';
$LNG['site_loaded'] = '主题 <a href="%s" rel="loadpage">%s</a> with <a href="%s" rel="loadpage">%s 插件</a> 启用';
$LNG['online_users'] = '在线用户';
$LNG['users'] = '用户';
$LNG['moderators'] = '版主';
$LNG['shares'] = 'Shares';
$LNG['useful_links'] = '相关链接';
$LNG['get_themes'] = '获取更多的主题';
$LNG['get_plugins'] = '获取更多插件';
$LNG['get_languages'] = '获取更多的语言';

// MANAGE REPORTS
$LNG['admin_reports_ignore'] = '忽略报告，并将内容标记为安全';
$LNG['admin_reports_delete'] = '删除报告和报告的内容';
$LNG['admin_reports_view'] = '查看已报告的内容';

// LIKES
$LNG['like'] = '像';
$LNG['dislike'] = '不像';
$LNG['liked'] = '喜欢';
$LNG['liked_this'] = '喜欢这个';
$LNG['view_all_likes'] = '查看所有喜欢';
$LNG['people_who_like_this'] = '喜欢的这个人';

// MISC
$LNG['sponsored'] = '发起';
$LNG['censored'] = '<strong>审查</strong>';
$LNG['new_like_notification'] = '<a href="%s" rel="loadpage">%s</a> 喜欢你的 <a href="%s" rel="loadpage">消息</a>';
$LNG['new_like_c_notification'] = '<a href="%s" rel="loadpage">%s</a> 喜欢你的 <a href="%s" rel="loadpage">评论</a>';
$LNG['new_poke_notification'] = '<a href="%s" rel="loadpage">%s</a> poked you';
$LNG['new_comment_notification'] = '<a href="%s" rel="loadpage">%s</a> 评论了你 <a href="%s" rel="loadpage">message</a>';
$LNG['new_shared_notification'] = '<a href="%s" rel="loadpage">%s</a> 分享了你 <a href="%s" rel="loadpage">message</a>';
$LNG['new_page_notification'] = '<a href="%s" rel="loadpage">%s</a> 邀请你喜欢的 <a href="%s" rel="loadpage">%s</a> page';
$LNG['new_group_notification'] = '<a href="%s" rel="loadpage">%s</a> 邀请你加入 <a href="%s" rel="loadpage">%s</a> group';
$LNG['new_friend_notification'] = '<a href="%s" rel="loadpage">%s</a> 接受你的好友请求';
$LNG['new_chat_notification'] = '<a href="%s" rel="loadpage">%s</a> 有你一个 <span class="desktop"><a onclick="%s">聊天消息</a></span><span class="mobile"><a href="%s" rel="loadpage">chat message</a></span>';
$LNG['new_birthday_notification'] = '<a href="%s" rel="loadpage">%s</a>\'s 生日';
$LNG['years_old'] = '%s 岁';
$LNG['x_and_x_others'] = '<a href="%s" rel="loadpage">%s</a> 和 <a href="%s" rel="loadpage">%s 别人</a>';
$LNG['new_like_fa'] = '<a href="%s" rel="loadpage">%s</a> 喜欢一个 <a href="%s" rel="loadpage">消息</a>';
$LNG['new_like_c_fa'] = '<a href="%s" rel="loadpage">%s</a> 喜欢一个 <a href="%s" rel="loadpage">评论</a>';
$LNG['new_comment_fa'] = '<a href="%s" rel="loadpage">%s</a> 点评 <a href="%s" rel="loadpage">消息</a>';
$LNG['new_message_fa'] = '<a href="%s" rel="loadpage">%s</a> 发布了一个新的 <a href="%s" rel="loadpage">消息</a>';
$LNG['change_password'] = '更改密码';
$LNG['enter_new_password'] = '输入你的新密码';
$LNG['enter_reset_key'] = '再次输入';
$LNG['enter_username'] = '输入用户名';
$LNG['reset_key'] = '找回';
$LNG['new_password'] = '新的密码';
$LNG['password_recovery'] = '密码找回';
$LNG['recover']	= '找回';
$LNG['recover_sub_username'] = '输入要找回密码的用户名或电子邮件中的类型';
$LNG['tracking_code'] = '跟踪代码';

// PAGE
$LNG['create_page'] = '创建页面';
$LNG['edit_page'] = '编辑页面';
$LNG['delete_page'] = '删除页面';
$LNG['page_sub_name'] = '页面名称（将出现在网址中）';
$LNG['page_sub_title'] = '页面标题（将出现在页面的标题上)';
$LNG['page_sub_description'] = '页面描述';
$LNG['page_sub_website'] = '网站地址';
$LNG['profile_image'] = '简介图像';
$LNG['cover_image'] = '封面图片';
$LNG['page_sub_pimg'] = '页面简介图像';
$LNG['page_sub_cover'] = '页面封面图片';
$LNG['category'] = '类别';
$LNG['page_sub_category'] = '网页分类';
$LNG['phone'] = '电话';
$LNG['page_sub_phone'] = '电话号码';
$LNG['page_sub_address'] = '实际地址';

$LNG['page_name_consist'] = '页面名称只能包含字母和数字';
$LNG['page_name_taken'] = '本页名称已被占用';
$LNG['page_name_less'] = '页面名称应小于 %s 字符';
$LNG['page_title_less'] = '页面标题应小于 %s 字符';
$LNG['page_desc_less'] = '页面描述应小于 %s 字符';
$LNG['invalid_phone'] = '电话号码只能包含数字，加（+）和减（-）标志.';
$LNG['page_delete_desc'] = '删除一个页面也将删除它的消息以及它们的内容.';
$LNG['page_deleted'] = '页面 <strong>%s</strong> 已被删除';

// PAGE CATEGORIES
$LNG['select_category'] = '选择一个类别';
$LNG['page_1'] = '本地企业或地方';
$LNG['page_2'] = '公司、组织或机构';
$LNG['page_3'] = '品牌或产品';
$LNG['page_4'] = '艺术家、乐队或公众人物';
$LNG['page_5'] = '游戏娱乐';
$LNG['page_6'] = '事业或社会';

// GROUP
$LNG['create_group'] = '创建组';
$LNG['edit_group'] = '编辑组';
$LNG['leave_group'] = '离开组';
$LNG['delete_group'] = '删除组';
$LNG['discussion'] = '讨论';
$LNG['members'] = '成员';
$LNG['admins'] = '管理员';
$LNG['page'] = '网页';
$LNG['group'] = '组';
$LNG['group_private'] = '对不起，但这个组是私有的，只有这个组的成员可以查看内容.';
$LNG['group_private_ttl'] = '私人组';
$LNG['name'] = '名称';
$LNG['any_member'] = '任何成员';
$LNG['posts'] = '帖子';
$LNG['group_sub_name'] = '组名称（将出现在网址中）';
$LNG['group_sub_title'] = '组标题（将出现在本组的标题）';
$LNG['group_sub_privacy'] = '该组的隐私';
$LNG['group_sub_description'] = '该组的描述';
$LNG['group_sub_posts'] = '谁能加入组';
$LNG['admins_posts'] = ', 只有管理员可以发布';
$LNG['members_posts'] = ', 任何成员可以发布';
$LNG['group_sub_cover'] = '组封面图片';
$LNG['public_group'] = '公开组';
$LNG['private_group'] = '私人组';
$LNG['x_members'] = '%s 成员';
$LNG['join_group'] = '加入群';
$LNG['pending_approval'] = '待批准';
$LNG['search_this_group'] = '搜索这组';
$LNG['invited'] = '邀请';
$LNG['member'] = '成员';
$LNG['invite'] = '邀请';

$LNG['group_name_consist'] = '组名称只能包含字母和数字';
$LNG['group_name_taken'] = '这组名称已被占用';
$LNG['group_name_less'] = '组名称应小于 %s 字符';
$LNG['group_title_less'] = '组标题应小于 %s 的字符';
$LNG['group_desc_less'] = '组描述应小于 %s 的字符';
$LNG['group_delete_desc'] = '删除一个组也将删除它的消息以及它们的内容.';
$LNG['group_deleted'] = '组 <strong>%s</strong> 已被删除';

$LNG['invite_friends'] = '邀请朋友';

// PROFILE
$LNG['profile_semi_private'] = '对不起，但这个配置文件是私有的，只有这个用户的朋友可以查看配置文件.';
$LNG['profile_private'] = '对不起，但这个配置文件是完全私有的.';
$LNG['profile_suspended'] = '对不起，但这个配置文件已被暂停.';
$LNG['profile_semi_private_ttl'] = '个人资料';
$LNG['profile_private_ttl'] = '个人资料';
$LNG['profile_suspended_ttl'] = '悬挂简介';
$LNG['profile_blocked'] = '对不起，您已阻塞或被此用户阻止.';
$LNG['profile_blocked_ttl'] = '封锁简介';
$LNG['add_friend'] = '加为好友';
$LNG['remove_friend'] = '删除好友';
$LNG['friend_request_sent'] = '朋友请求发送';
$LNG['friend_request_accept'] = '接受朋友的请求';
$LNG['created_on'] = '创建';
$LNG['description'] = '描述';
$LNG['profile_about'] = '关于';
$LNG['profile_birthdate'] = '出生日期';
$LNG['lives_in'] = '住在';
$LNG['born_on'] = '出生于';
$LNG['studied_at'] = '学历';
$LNG['works_at'] = '工作';
$LNG['profile_view_site'] = '查看网站';
$LNG['profile_view_profile'] = '查看配置文件';
$LNG['profile_bio']	= '简介';
$LNG['verified_page'] = '验证页面';
$LNG['edit_profile_cover'] = '改变资料图片';
$LNG['view_all_notifications'] = '查看更多的通知';
$LNG['view_chat_notifications'] = '查看更多信息';
$LNG['view_confirmed_friendships'] = '确认请求';
$LNG['close_notifications'] = '关闭通知';
$LNG['notifications_settings'] = '通知设置';
$LNG['no_notifications'] = '没有通知';
$LNG['search_title'] = '搜索结果';
$LNG['view_all_results'] = '查看所有的结果';
$LNG['close_results'] = '接近的结果';
$LNG['no_results'] = '没有可用的结果。尝试另一个搜索.';
$LNG['no_results_ttl'] = '搜索结果';
$LNG['search_for_users'] = '搜索用户';
$LNG['search_in_friends'] = '搜索朋友';
$LNG['follows'] = '如下';
$LNG['followed_by'] = '其次';
$LNG['people'] = '人';
$LNG['no_info_avail'] = '没有可用的信息';
$LNG['account_suspended'] = '此帐户目前已暂停.';
$LNG['account_not_activated'] = '此帐户没有激活. <a href="%s">点击这里</a> to 重新发送激活邮件.';
$LNG['re_activate_already'] = '激活电子邮件已被发送今天';
$LNG['re_activate_sent'] = '已发送激活电子邮件';

// GENERAL
$LNG['title_profile'] = '简介';
$LNG['title_feed'] = '新闻';
$LNG['title_post'] = '帖子';
$LNG['title_messages'] = '消息';
$LNG['title_settings'] = '设置';
$LNG['title_search'] = '搜索';
$LNG['title_notifications'] = '通知';
$LNG['title_page'] = '创建页面';
$LNG['title_group'] = '创建组';
$LNG['title_admin']	= '管理员';
$LNG['edit'] = '编辑';
$LNG['delete'] = '删除';
$LNG['suspended'] = '暂停';
$LNG['ignore'] = '忽略';
$LNG['view'] = '视图';
$LNG['timeline'] = '时间表';
$LNG['on'] = 'On';
$LNG['off'] = 'Off';
$LNG['yes'] = 'Yes';
$LNG['no'] = 'No';
$LNG['none'] = 'None';
$LNG['pages'] = '页';
$LNG['search_for_people'] = '搜索的人，#标签”页面，！组';
$LNG['new_message'] = '新消息';
$LNG['privacy_policy'] = '隐私权政策';
$LNG['terms_of_use'] = '使用条款';
$LNG['about'] = '关于';
$LNG['disclaimer'] = '免责声明';
$LNG['contact'] = '联系';
$LNG['api_documentation'] = 'API文档';
$LNG['developers'] = '开发者';
$LNG['language'] = '语言';

// TIME
$LNG['just_now'] = '现在';
$LNG['second_s'] = '秒（s）';
$LNG['minute_s'] = '分钟（s）';
$LNG['hour_s'] = '小时（s）';
$LNG['day_s'] = '天（s）';
$LNG['week_s'] = '周（s）';
$LNG['month_s'] = '月（s）';
$LNG['year_s'] = '年（s）';
$LNG['ago'] = '以前';

// MONTHS
$LNG['month'] = '月';
$LNG['year'] = '年';
$LNG['day'] = '天';
$LNG['month_1'] = '一月';
$LNG['month_2'] = '二月';
$LNG['month_3'] = '三月';
$LNG['month_4'] = '四月';
$LNG['month_5'] = '五月';
$LNG['month_6'] = '六月';
$LNG['month_7'] = '七月';
$LNG['month_8'] = '八月';
$LNG['month_9'] = '九月';
$LNG['month_10'] = '十月';
$LNG['month_11'] = '十一月';
$LNG['month_12'] = '十二月';
?>