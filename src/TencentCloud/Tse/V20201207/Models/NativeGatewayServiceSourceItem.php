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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Gateway data source description
 *
 * @method string getGatewayID() Obtain Gateway instance ID
 * @method void setGatewayID(string $GatewayID) Set Gateway instance ID
 * @method string getSourceID() Obtain Service Source ID
 * @method void setSourceID(string $SourceID) Set Service Source ID
 * @method string getSourceName() Obtain Service Source Name
 * @method void setSourceName(string $SourceName) Set Service Source Name
 * @method string getSourceType() Obtain Service source type
 * @method void setSourceType(string $SourceType) Set Service source type
 * @method SourceInfo getSourceInfo() Obtain Service source additional information
 * @method void setSourceInfo(SourceInfo $SourceInfo) Set Service source additional information
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 */
class NativeGatewayServiceSourceItem extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayID;

    /**
     * @var string Service Source ID
     */
    public $SourceID;

    /**
     * @var string Service Source Name
     */
    public $SourceName;

    /**
     * @var string Service source type
     */
    public $SourceType;

    /**
     * @var SourceInfo Service source additional information
     */
    public $SourceInfo;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @param string $GatewayID Gateway instance ID
     * @param string $SourceID Service Source ID
     * @param string $SourceName Service Source Name
     * @param string $SourceType Service source type
     * @param SourceInfo $SourceInfo Service source additional information
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new SourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
