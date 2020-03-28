<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!--    <style>-->
    <!--        @import "theme/index.css";-->
    <!--    </style>-->
</head>

<body>
<div id="app">
    <el-container style="height: 800px; border: 1px solid #eee">


        <el-aside width="200px">
            <el-menu>

                <el-submenu index="1">
                    <template slot="title"><i class="el-icon-star-on"></i>我的</template>
                    <el-menu-item index="1-1"><i class="el-icon-folder-opened"></i>收藏夹</el-menu-item>
                    <el-menu-item index="1-2"><i class="el-icon-sell"></i>关注店铺</el-menu-item>
                    <el-menu-item index="1-2"><i class="el-icon-tickets"></i>浏览记录</el-menu-item>
                </el-submenu>

                <el-submenu index="2">
                    <template slot="title"><i class="el-icon-star-on"></i>订单</template>
                    <el-menu-item index="1-1"><i class="el-icon-postcard"></i>待付款</el-menu-item>
                    <el-menu-item index="1-2"><i class="el-icon-files"></i>待发货</el-menu-item>
                    <el-menu-item index="1-2"><i class="el-icon-truck"></i>待收货</el-menu-item>
                </el-submenu>

            </el-menu>
        </el-aside>


        <el-container>
            <el-header style="background:#409EFF;font-size: 12px;line-height: 60px;text-align: left;">

                <el-row :gutter="10">
                    <el-col :span="1">
                        <el-dropdown>
                            <i class="el-icon-more-outline" style=""></i>
                            <el-dropdown-menu slot="dropdown">
                                <el-dropdown-item @click="">登录</el-dropdown-item>
                                <el-dropdown-item @click="">注销</el-dropdown-item>
                            </el-dropdown-menu>
                        </el-dropdown>
                    </el-col>
                    <el-col :span="1" style="margin-top: 10px">
                        <div>
                            <el-avatar
                                    src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png"></el-avatar>
                        </div>
                    </el-col>
                    <el-col :span="1">
                        <span>用户A</span>
                    </el-col>
                </el-row>
            </el-header>
            <el-main>
                <el-row :gutter="20">
                    <el-col :span="12" :offset="6">
                        <el-input v-model="input" placeholder="请输入内容"></el-input>
                    </el-col>
                    <el-col :span="6">
                        <el-button>搜索</el-button>
                    </el-col>
                </el-row>


                <el-menu mode="horizontal">

                    <el-submenu index="1">
                        <template slot="title">超值划算</template>
                        <el-menu-item index="2-1">大牌秒杀</el-menu-item>
                        <el-menu-item index="2-2">限时抢购</el-menu-item>
                        <el-menu-item index="2-3">优惠多多</el-menu-item>
                    </el-submenu>
                    <el-submenu index="2">
                        <template slot="title">电器</template>
                        <el-menu-item index="2-1">空调</el-menu-item>
                        <el-menu-item index="2-2">电视</el-menu-item>
                        <el-menu-item index="2-3">冰箱</el-menu-item>
                        <el-menu-item index="2-3">电脑</el-menu-item>
                    </el-submenu>
                    <el-submenu index="3">
                        <template slot="title">女装</template>
                        <el-menu-item index="2-1">上衣</el-menu-item>
                        <el-menu-item index="2-2">裙子</el-menu-item>
                        <el-menu-item index="2-3">鞋子</el-menu-item>
                        <el-menu-item index="2-3">包包</el-menu-item>
                        <el-menu-item index="2-3">首饰</el-menu-item>
                    </el-submenu>
                    <el-submenu index="4">
                        <template slot="title">男装</template>
                        <el-menu-item index="2-1">衬衫</el-menu-item>
                        <el-menu-item index="2-2">裤子</el-menu-item>
                        <el-menu-item index="2-3">鞋子</el-menu-item>
                        <el-menu-item index="2-3">手表</el-menu-item>
                    </el-submenu>
                    <el-submenu index="5">
                        <template slot="title">零食</template>
                        <el-menu-item index="2-1">坚果</el-menu-item>
                        <el-menu-item index="2-2">薯片</el-menu-item>
                        <el-menu-item index="2-3">饮料</el-menu-item>
                        <el-menu-item index="2-3">泡面</el-menu-item>
                        <el-menu-item index="2-3">饼干</el-menu-item>
                    </el-submenu>
                </el-menu>
                <template>
                    <div class="block">
                        <el-carousel height="400px" style="background:mediumvioletred">
                            <el-carousel-item v-for="item in 4" :key="item">
                                <h3 class="small">a</h3>
                            </el-carousel-item>
                        </el-carousel>
                    </div>
                </template>

            </el-main>
            <el-footer>
                关于我们
            </el-footer>
        </el-container>


    </el-container>

</div>

</body>
<!-- import Vue before Element -->
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {visible: false}
        }
    });
</script>
</html>
