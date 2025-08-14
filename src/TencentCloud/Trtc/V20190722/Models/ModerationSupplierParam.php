<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters required for submitting content to the third-party moderation supplier.
 *
 * @method string getAppID() Obtain Moderation supplier account ID. For Tencent Tianyu, the value is not null; for NETEASE Yidun, the value is null.
 * @method void setAppID(string $AppID) Set Moderation supplier account ID. For Tencent Tianyu, the value is not null; for NETEASE Yidun, the value is null.
 * @method string getSecretId() Obtain Moderation supplier key ID.
 * @method void setSecretId(string $SecretId) Set Moderation supplier key ID.
 * @method string getSecretKey() Obtain Moderation supplier key.
 * @method void setSecretKey(string $SecretKey) Set Moderation supplier key.
 * @method string getAudioBizType() Obtain Audio scenario. Policy ID or businessId.
 * @method void setAudioBizType(string $AudioBizType) Set Audio scenario. Policy ID or businessId.
 * @method string getImageBizType() Obtain Image scenario. Policy ID or businessId.
 * @method void setImageBizType(string $ImageBizType) Set Image scenario. Policy ID or businessId.
 */
class ModerationSupplierParam extends AbstractModel
{
    /**
     * @var string Moderation supplier account ID. For Tencent Tianyu, the value is not null; for NETEASE Yidun, the value is null.
     */
    public $AppID;

    /**
     * @var string Moderation supplier key ID.
     */
    public $SecretId;

    /**
     * @var string Moderation supplier key.
     */
    public $SecretKey;

    /**
     * @var string Audio scenario. Policy ID or businessId.
     */
    public $AudioBizType;

    /**
     * @var string Image scenario. Policy ID or businessId.
     */
    public $ImageBizType;

    /**
     * @param string $AppID Moderation supplier account ID. For Tencent Tianyu, the value is not null; for NETEASE Yidun, the value is null.
     * @param string $SecretId Moderation supplier key ID.
     * @param string $SecretKey Moderation supplier key.
     * @param string $AudioBizType Audio scenario. Policy ID or businessId.
     * @param string $ImageBizType Image scenario. Policy ID or businessId.
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("AudioBizType",$param) and $param["AudioBizType"] !== null) {
            $this->AudioBizType = $param["AudioBizType"];
        }

        if (array_key_exists("ImageBizType",$param) and $param["ImageBizType"] !== null) {
            $this->ImageBizType = $param["ImageBizType"];
        }
    }
}
