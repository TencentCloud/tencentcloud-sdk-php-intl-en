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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Created watermark key
 *
 * @method string getKeyVersion() Obtain Key version
 * @method void setKeyVersion(string $KeyVersion) Set Key version
 * @method string getKeyContent() Obtain Key content
 * @method void setKeyContent(string $KeyContent) Set Key content
 * @method string getKeyId() Obtain Key ID
 * @method void setKeyId(string $KeyId) Set Key ID
 * @method integer getKeyOpenStatus() Obtain Key status. Valid value: `1` (enabled).
 * @method void setKeyOpenStatus(integer $KeyOpenStatus) Set Key status. Valid value: `1` (enabled).
 * @method string getCreateTime() Obtain Key creation time
 * @method void setCreateTime(string $CreateTime) Set Key creation time
 */
class WaterPrintKey extends AbstractModel
{
    /**
     * @var string Key version
     */
    public $KeyVersion;

    /**
     * @var string Key content
     */
    public $KeyContent;

    /**
     * @var string Key ID
     */
    public $KeyId;

    /**
     * @var integer Key status. Valid value: `1` (enabled).
     */
    public $KeyOpenStatus;

    /**
     * @var string Key creation time
     */
    public $CreateTime;

    /**
     * @param string $KeyVersion Key version
     * @param string $KeyContent Key content
     * @param string $KeyId Key ID
     * @param integer $KeyOpenStatus Key status. Valid value: `1` (enabled).
     * @param string $CreateTime Key creation time
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
        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("KeyContent",$param) and $param["KeyContent"] !== null) {
            $this->KeyContent = $param["KeyContent"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyOpenStatus",$param) and $param["KeyOpenStatus"] !== null) {
            $this->KeyOpenStatus = $param["KeyOpenStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
