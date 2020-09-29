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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Suspicious login location settings
 *
 * @method integer getVerifyFlag() Obtain Verification flag
 * @method void setVerifyFlag(integer $VerifyFlag) Set Verification flag
 * @method integer getNotifyPhone() Obtain Phone notification
 * @method void setNotifyPhone(integer $NotifyPhone) Set Phone notification
 * @method integer getNotifyEmail() Obtain Email notification
 * @method void setNotifyEmail(integer $NotifyEmail) Set Email notification
 * @method integer getNotifyWechat() Obtain WeChat notification
 * @method void setNotifyWechat(integer $NotifyWechat) Set WeChat notification
 * @method integer getTips() Obtain Alert
 * @method void setTips(integer $Tips) Set Alert
 */
class OffsiteFlag extends AbstractModel
{
    /**
     * @var integer Verification flag
     */
    public $VerifyFlag;

    /**
     * @var integer Phone notification
     */
    public $NotifyPhone;

    /**
     * @var integer Email notification
     */
    public $NotifyEmail;

    /**
     * @var integer WeChat notification
     */
    public $NotifyWechat;

    /**
     * @var integer Alert
     */
    public $Tips;

    /**
     * @param integer $VerifyFlag Verification flag
     * @param integer $NotifyPhone Phone notification
     * @param integer $NotifyEmail Email notification
     * @param integer $NotifyWechat WeChat notification
     * @param integer $Tips Alert
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
        if (array_key_exists("VerifyFlag",$param) and $param["VerifyFlag"] !== null) {
            $this->VerifyFlag = $param["VerifyFlag"];
        }

        if (array_key_exists("NotifyPhone",$param) and $param["NotifyPhone"] !== null) {
            $this->NotifyPhone = $param["NotifyPhone"];
        }

        if (array_key_exists("NotifyEmail",$param) and $param["NotifyEmail"] !== null) {
            $this->NotifyEmail = $param["NotifyEmail"];
        }

        if (array_key_exists("NotifyWechat",$param) and $param["NotifyWechat"] !== null) {
            $this->NotifyWechat = $param["NotifyWechat"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
