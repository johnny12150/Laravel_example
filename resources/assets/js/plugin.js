//使用annotator js 來製作plugin
var annotation = function(e) {
    this.server_host = '172.16.100.20:9999';

    this.element = e;
    this.annotator = null;
    //this.host = location.host;
    var _annotation = this;

    /*初始化設定
    * return annotation
    */
    this.init = function() {
        // init annotator
        this.annotator = $(_annotation.element).annotator();     //Use "annotator()" Setting up Annotator

        //use自訂存資料的插件
        this.annotator
            .annotator('addPlugin', 'Read', {
                url: {
                    search:  'http://' + this.server_host + '/search/'
                }
            })

    };

    return this;
}
