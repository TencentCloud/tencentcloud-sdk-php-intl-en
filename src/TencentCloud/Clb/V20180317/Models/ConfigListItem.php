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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration content
 *
 * @method string getUconfigId() Obtain Configuration ID.
 * @method void setUconfigId(string $UconfigId) Set Configuration ID.
 * @method string getConfigType() Obtain Configuration type.
 * @method void setConfigType(string $ConfigType) Set Configuration type.
 * @method string getConfigName() Obtain Configuration name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setConfigName(string $ConfigName) Set Configuration name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getConfigContent() Obtain Configuration content.
 * @method void setConfigContent(string $ConfigContent) Set Configuration content.
 * @method string getCreateTimestamp() Obtain Creates configuration time.
 * @method void setCreateTimestamp(string $CreateTimestamp) Set Creates configuration time.
 * @method string getUpdateTimestamp() Obtain Modifies configuration time.
 * @method void setUpdateTimestamp(string $UpdateTimestamp) Set Modifies configuration time.
 */
class ConfigListItem extends AbstractModel
{
    /**
     * @var string Configuration ID.
     */
    public $UconfigId;

    /**
     * @var string Configuration type.
     */
    public $ConfigType;

    /**
     * @var string Configuration name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ConfigName;

    /**
     * @var string Configuration content.
     */
    public $ConfigContent;

    /**
     * @var string Creates configuration time.
     */
    public $CreateTimestamp;

    /**
     * @var string Modifies configuration time.
     */
    public $UpdateTimestamp;

    /**
     * @param string $UconfigId Configuration ID.
     * @param string $ConfigType Configuration type.
     * @param string $ConfigName Configuration name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ConfigContent Configuration content.
     * @param string $CreateTimestamp Creates configuration time.
     * @param string $UpdateTimestamp Modifies configuration time.
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
        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("UpdateTimestamp",$param) and $param["UpdateTimestamp"] !== null) {
            $this->UpdateTimestamp = $param["UpdateTimestamp"];
        }
    }
}
