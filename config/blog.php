<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cell Blog config Goto http://your.host/admin/systems
    |--------------------------------------------------------------------------
    | ！！！不建议修改该配置文件，推荐前往 后台->配置 添加key-value即可，方便管理
    |
    */
    'title' => 'DIFF Blog',
    'blog_name' => 'DIFF Blog',
    'description' => '基于PHP框架Laravel7开发的Markdown个人独立博客,Powered by DIFF Blog,Author: Github@DIFF',
    'keywords' => 'DIFF-Blog,Laravel-Blog,Markdown,PHP,个人独立博客,DIFF',
    'welcome_words' => '欢迎来到 DIFF Blog 个人独立博客！',
    'github_url' => 'https://github.com/DIFF0815',
    'weibo_url' => 'https://weibo.com/DIFF0815',

    /*
    |--------------------------------------------------------------------------
    | 评论插件
    |--------------------------------------------------------------------------
    */
    'comment_plugin' => '',/*------ 评论插件 目前仅支持valine ------*/
    'valine_app_id' => '',
    'valine_app_key' => '',

    /*
    |--------------------------------------------------------------------------
    | 腾讯云COS桶相册 教程: https://lruihao.cn/posts/cos-album.html
    |--------------------------------------------------------------------------
    | cos-ablum为需要解析的腾讯云COS桶XML链接
    | eg. https://img-xxxxxxxxxx.cos.ap-chengdu.myqcloud.com
    */
    'cos-album' => '',

    /*
    |--------------------------------------------------------------------------
    | Footer config
    |--------------------------------------------------------------------------
    */
    'copyright_holder' => 'DIFF0815',/*------ 版权所有 eg. Lruihao ------*/
    'icp_info' => '',/*------ ICP备案号 eg. 粤 ICP 备 xxxxxxxx 号 ------*/
    'busuanzi_count' => true,/*------ 不蒜子计数 ------*/
    'run_time' => '2018/09/28 22:01:01',/*------ 建站时间 eg. 2018/09/28 22:01:01 ------*/

    /*
    |--------------------------------------------------------------------------
    | 自定义JavaScript脚本
    |--------------------------------------------------------------------------
    */
    'custom_script' => ''
];