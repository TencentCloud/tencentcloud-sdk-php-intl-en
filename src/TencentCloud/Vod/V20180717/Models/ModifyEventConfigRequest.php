<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEventConfig request structure.
 *
 * @method string getMode() Obtain How to receive event notifications. 
<li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948);</li>
<li>PULL: [Reliable notification based on message queue ](https://www.tencentcloud.com/document/product/266/33948). </li>
 * @method void setMode(string $Mode) Set How to receive event notifications. 
<li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948);</li>
<li>PULL: [Reliable notification based on message queue ](https://www.tencentcloud.com/document/product/266/33948). </li>
 * @method string getNotificationUrl() Obtain The address used to receive 3.0 format callbacks when using the [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948) reception method. 
Note: If the NotificationUrl parameter is provided and the value is an empty string, the 3.0 format callback address will be cleared.
 * @method void setNotificationUrl(string $NotificationUrl) Set The address used to receive 3.0 format callbacks when using the [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948) reception method. 
Note: If the NotificationUrl parameter is provided and the value is an empty string, the 3.0 format callback address will be cleared.
 * @method string getUploadMediaCompleteEventSwitch() Obtain Whether to receive the [Video Upload Completed](https://www.tencentcloud.com/document/product/266/33950) event notification. The default "OFF" is to ignore the event notification, and "ON" is to receive the event notification. 
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) Set Whether to receive the [Video Upload Completed](https://www.tencentcloud.com/document/product/266/33950) event notification. The default "OFF" is to ignore the event notification, and "ON" is to receive the event notification. 
 * @method string getDeleteMediaCompleteEventSwitch() Obtain Whether to receive [Video deletion completed](https://www.tencentcloud.com/document/product/266/33952) event notification, the default "OFF" means to ignore the event notification, "ON" means to receive the event notification .
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) Set Whether to receive [Video deletion completed](https://www.tencentcloud.com/document/product/266/33952) event notification, the default "OFF" means to ignore the event notification, "ON" means to receive the event notification .
 * @method integer getSubAppId() Obtain VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
 * @method void setSubAppId(integer $SubAppId) Set VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
 */
class ModifyEventConfigRequest extends AbstractModel
{
    /**
     * @var string How to receive event notifications. 
<li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948);</li>
<li>PULL: [Reliable notification based on message queue ](https://www.tencentcloud.com/document/product/266/33948). </li>
     */
    public $Mode;

    /**
     * @var string The address used to receive 3.0 format callbacks when using the [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948) reception method. 
Note: If the NotificationUrl parameter is provided and the value is an empty string, the 3.0 format callback address will be cleared.
     */
    public $NotificationUrl;

    /**
     * @var string Whether to receive the [Video Upload Completed](https://www.tencentcloud.com/document/product/266/33950) event notification. The default "OFF" is to ignore the event notification, and "ON" is to receive the event notification. 
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string Whether to receive [Video deletion completed](https://www.tencentcloud.com/document/product/266/33952) event notification, the default "OFF" means to ignore the event notification, "ON" means to receive the event notification .
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var integer VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
     */
    public $SubAppId;

    /**
     * @param string $Mode How to receive event notifications. 
<li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948);</li>
<li>PULL: [Reliable notification based on message queue ](https://www.tencentcloud.com/document/product/266/33948). </li>
     * @param string $NotificationUrl The address used to receive 3.0 format callbacks when using the [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948) reception method. 
Note: If the NotificationUrl parameter is provided and the value is an empty string, the 3.0 format callback address will be cleared.
     * @param string $UploadMediaCompleteEventSwitch Whether to receive the [Video Upload Completed](https://www.tencentcloud.com/document/product/266/33950) event notification. The default "OFF" is to ignore the event notification, and "ON" is to receive the event notification. 
     * @param string $DeleteMediaCompleteEventSwitch Whether to receive [Video deletion completed](https://www.tencentcloud.com/document/product/266/33952) event notification, the default "OFF" means to ignore the event notification, "ON" means to receive the event notification .
     * @param integer $SubAppId VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrl",$param) and $param["NotificationUrl"] !== null) {
            $this->NotificationUrl = $param["NotificationUrl"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
