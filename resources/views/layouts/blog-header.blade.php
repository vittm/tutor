 <header id="header" class="header header--with-small-bottom-margin header--homepage">

        <div class="navigation-bar">
            <div class="layout-container">
                <div class="navigation-bar__menu">
                    <div data-react-class="Menu" data-react-props="{}">
                        <a href="javascript:void(0);" class="menu" data-reactid=".1rc7ttes64g" data-react-checksum="-70363899">
                            <div class="menu__line" data-reactid=".1rc7ttes64g.0"></div>
                            <div class="menu__line" data-reactid=".1rc7ttes64g.1"></div>
                            <div class="menu__line" data-reactid=".1rc7ttes64g.2"></div>
                        </a>
                    </div>
                </div>

                <div class="navigation-bar__name">
                    <a class="logo navigation-bar__name__logo" href="{{ url('blog') }}"><img alt="Mogul" src="https://onmogul.com/assets/redesign/mogul-083de11ea9c8ef08c3760c06e4398151bd86facefbaf2dfcd5c744571b817210.svg">
                    </a>
                </div>

                <nav class="navigation-bar__links">
                    <ul class="link-list navigation-bar__links__link-list">
                        <li><a href="/growth">Growth</a>
                        </li>
                        <li><a href="/love">Love</a>
                        </li>
                        <li><a href="/world">World</a>
                        </li>
                        <li><a href="/style">Style</a>
                        </li>
                        <li><a href="/culture">Culture</a>
                        </li>
                    </ul>

                    <ul class="link-list navigation-bar__links__link-list">
                        @foreach( $category as $value)
                        <li><a href="{{ url('/the-loai') }}-{{ $value->title_sym }}">{{ $value->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class="navigation-bar__actions">
                <ul class="action-list navigation-bar__actions__action-list">
                    <li class="navigation-bar__actions__action-list__facebook-like">
                        <div class="fb-like fb_iframe_widget" data-href="https://facebook.com/onmogul" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=443362462445917&amp;container_width=0&amp;href=https%3A%2F%2Ffacebook.com%2Fonmogul&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 79px; height: 20px;"><iframe style="border: none; visibility: visible; width: 79px; height: 20px;" class=""></iframe></span>
                        </div>
                    </li>
                    @if (Auth::guest())
                    <li class="navigation-bar__actions__action-list__search">
                        <a href="{{ url('/login') }}">Đăng Nhập
                        </a>

                    </li>
                    @else
                        <ul class="global-header__login log--active">
                        <li><a class="avatar" href="#"><img src="{{ URL::to('/img/avatar')}}/{{ Auth::user()->avatar }}" alt="..." class="img-circle" height="50"></a>@if($mess > 0)<a class="notification_mess" href="{{url('/danh-sach-tin-nhan')}}-{{Auth::user()->id}}"><img src="{{ URL::to('/img/icon')}}/speech-bubble.png"><span>{{ $mess }} </span></a>@endif</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}"><i class="fa fa-user" aria-hidden="true"></i>Trang Cá Nhân</a></li>
                                <li><a href="{{ url('/chinh-sua-ca-nhan')}}-{{ Auth::user()->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Chỉnh Sửa Cá Nhân</a></li>
                                <li><a href="{{ url('/dang-tin')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i>Đăng Tin</a></li>
                                <li><a href="{{url('/danh-sach-tin-nhan')}}-{{Auth::user()->id}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Hộp Tin Nhắn</a></li>
                                @if(Auth::user()->active == 0)
                                <li><a href="{{ url('/admin/text') }}"><i class="fa fa-cogs" aria-hidden="true"></i>Admin</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Đăng Xuất</a></li>
                            </ul>
                        </li>
                    </ul>

                    @endif
                    <li>
                        <div data-react-class="PostDropdown" data-react-props="{&quot;signedIn&quot;:false}" style="height: 100%;">
                            <div class="dropdown dropdown--post-dropdown" data-reactid=".xxj4ohi60w" data-react-checksum="-135935700"><a href="" class="button button--expanded dropdown__link" data-reactid=".xxj4ohi60w.0">Đăng tin</a>
                                <div class="dropdown__menu" data-reactid=".xxj4ohi60w.1" style="display: none;">
                                    <ul class="post-type-snippet-list" data-reactid=".xxj4ohi60w.1.0">
                                        <li data-reactid=".xxj4ohi60w.1.0.1">
                                            <a href="@if(Auth::guest()) @else {{ url('login') }}{{ url('dang-bai-cau-hoi') }} @endif" class="post-type-snippet" data-reactid=".xxj4ohi60w.1.0.1.0">
                                                <div class="post-type-snippet__icon" data-reactid=".xxj4ohi60w.1.0.1.0.0"><img alt="Ask Anything" src="{{ url('img/icon/question.png')}}" data-reactid=".xxj4ohi60w.1.0.1.0.0.0">
                                                </div>
                                                <div class="post-type-snippet__details" data-reactid=".xxj4ohi60w.1.0.1.0.1">
                                                    <div class="post-type-snippet__details__type" data-reactid=".xxj4ohi60w.1.0.1.0.1.0">Câu hỏi</div>
                                                    <div class="post-type-snippet__details__description" data-reactid=".xxj4ohi60w.1.0.1.0.1.1">Chúng tôi sẽ giúp được gì?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-reactid=".xxj4ohi60w.1.0.2">
                                            <a href="@if(Auth::guest()){{ url('login') }} @else {{ url('dang-bai-hoc-thuat') }} @endif" class="post-type-snippet" data-reactid=".xxj4ohi60w.1.0.2.0">
                                                <div class="post-type-snippet__icon" data-reactid=".xxj4ohi60w.1.0.2.0.0"><img alt="Product" src="{{ url('img/icon/atom.png')}}" data-reactid=".xxj4ohi60w.1.0.2.0.0.0">
                                                </div>
                                                <div class="post-type-snippet__details" data-reactid=".xxj4ohi60w.1.0.2.0.1">
                                                    <div class="post-type-snippet__details__type" data-reactid=".xxj4ohi60w.1.0.2.0.1.0">Học Thuật</div>
                                                    <div class="post-type-snippet__details__description" data-reactid=".xxj4ohi60w.1.0.2.0.1.1">Kiến thức là vô vàng</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-reactid=".xxj4ohi60w.1.0.3">
                                            <a href="@if(Auth::guest()){{ url('login') }} @else {{ url('dang-bai-ngoai-ngu') }} @endif" class="post-type-snippet" data-reactid=".xxj4ohi60w.1.0.3.0">
                                                <div class="post-type-snippet__icon" data-reactid=".xxj4ohi60w.1.0.3.0.0"><img alt="Job" src="{{ url('img/icon/language.png')}}" data-reactid=".xxj4ohi60w.1.0.3.0.0.0">
                                                </div>
                                                <div class="post-type-snippet__details" data-reactid=".xxj4ohi60w.1.0.3.0.1">
                                                    <div class="post-type-snippet__details__type" data-reactid=".xxj4ohi60w.1.0.3.0.1.0">Ngoại Ngữ</div>
                                                    <div class="post-type-snippet__details__description" data-reactid=".xxj4ohi60w.1.0.3.0.1.1">Chia sẻ kinh nghiệm</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li data-reactid=".xxj4ohi60w.1.0.4">
                                            <a href="@if(Auth::guest()){{ url('login') }} @else {{ url('dang-bai-nghe-nghiep') }} @endif" class="post-type-snippet" data-reactid=".xxj4ohi60w.1.0.4.0">
                                                <div class="post-type-snippet__icon" data-reactid=".xxj4ohi60w.1.0.4.0.0"><img alt="Link" src="{{ url('img/icon/job-post.png')}}">
                                                </div>
                                                <div class="post-type-snippet__details" data-reactid=".xxj4ohi60w.1.0.4.0.1">
                                                    <div class="post-type-snippet__details__type" data-reactid=".xxj4ohi60w.1.0.4.0.1.0">Nghề nghiệp</div>
                                                    <div class="post-type-snippet__details__description" data-reactid=".xxj4ohi60w.1.0.4.0.1.1">Công việc có gì</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navigation-bar-mobile-menu navigation-bar-mobile-menu--closed">
            <nav class="navigation-bar-mobile-menu__links">
                <ul>
                    <li>
                        <div class="fb-like fb_iframe_widget" data-href="https://facebook.com/onmogul" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=443362462445917&amp;container_width=1349&amp;href=https%3A%2F%2Ffacebook.com%2Fonmogul&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 79px; height: 20px;"><iframe name="f732518dd016b" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.4/plugins/like.php?action=like&amp;app_id=443362462445917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlUqP5iIjiw6.js%3Fversion%3D42%23cb%3Df315773b2e83548%26domain%3Donmogul.com%26origin%3Dhttps%253A%252F%252Fonmogul.com%252Ff172a5430a2b1fc%26relation%3Dparent.parent&amp;container_width=1349&amp;href=https%3A%2F%2Ffacebook.com%2Fonmogul&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: none; visibility: visible; width: 79px; height: 20px;" class=""></iframe></span>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="field field--with-no-bottom-margin">
                            <div class="input-group">
                                <span class="input-group__addon"><img class="icon icon--search" src="/assets/redesign/search_black-0da1f2272d106f15cde6f911c23c15e4208d30c3329379204d5a092f5b2e1203.svg" alt="Search black 0da1f2272d106f15cde6f911c23c15e4208d30c3329379204d5a092f5b2e1203"></span>

                                <form action="/searches" accept-charset="UTF-8" method="get">
                                    <input name="utf8" type="hidden" value="✓">
                                    <input type="text" name="query" id="query" placeholder="Search..." class="field__control">
                                </form>
                            </div>
                        </div>
                    </li>
                    <li><a href="/growth">Growth</a>
                    </li>
                    <li><a href="/love">Love</a>
                    </li>
                    <li><a href="/world">World</a>
                    </li>
                    <li><a href="/style">Style</a>
                    </li>
                    <li><a href="/culture">Culture</a>
                    </li>
                </ul>
                <ul class="navigation-bar-mobile-menu__links__verticals">
                    <li><a href="/ask_anything">Ask Anything</a>
                    </li>
                    <li><a href="/products">Products</a>
                    </li>
                    <li><a href="/jobs">Jobs</a>
                    </li>
                    <li><a href="/courses">At Work</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>