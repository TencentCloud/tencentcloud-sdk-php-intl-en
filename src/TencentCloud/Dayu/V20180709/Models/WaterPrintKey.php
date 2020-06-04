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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark key
 *
 * @method string getKeyId() Obtain Watermark key ID
 * @method void setKeyId(string $KeyId) Set Watermark key ID
 * @method string getKeyContent() Obtain Watermark key value
 * @method void setKeyContent(string $KeyContent) Set Watermark key value
 * @method string getKeyVersion() Obtain Watermark key version number
 * @method void setKeyVersion(string $KeyVersion) Set Watermark key version number
 * @method integer getOpenStatus() Obtain Whether it is enabled. Valid values: [0 (no), 1 (yes)]
 * @method void setOpenStatus(integer $OpenStatus) Set Whether it is enabled. Valid values: [0 (no), 1 (yes)]
 * @method string getCreateTime() Obtain Key generation time
 * @method void setCreateTime(string $CreateTime) Set Key generation time
 */
class WaterPrintKey extends AbstractModel
{
    /**
     * @var string Watermark key ID
     */
    public $KeyId;

    /**
     * @var string Watermark key value
     */
    public $KeyContent;

    /**
     * @var string Watermark key version number
     */
    public $KeyVersion;

    /**
     * @var integer Whether it is enabled. Valid values: [0 (no), 1 (yes)]
     */
    public $OpenStatus;

    /**
     * @var string Key generation time
     */
    public $CreateTime;

    /**
     * @param string $KeyId Watermark key ID
     * @param string $KeyContent Watermark key value
     * @param string $KeyVersion Watermark key version number
     * @param integer $OpenStatus Whether it is enabled. Valid values: [0 (no), 1 (yes)]
     * @param string $CreateTime Key generation time
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyContent",$param) and $param["KeyContent"] !== null) {
            $this->KeyContent = $param["KeyContent"];
        }

        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
