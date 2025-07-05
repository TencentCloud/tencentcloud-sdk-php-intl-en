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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosTokenV2 request structure.
 *
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method string getPkgName() Obtain Package name
 * @method void setPkgName(string $PkgName) Set Package name
 * @method integer getOptType() Obtain optType. 1: upload; 2: query
 * @method void setOptType(integer $OptType) Set optType. 1: upload; 2: query
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method string getTimeVersion() Obtain Input parameter of `deployVersion`
 * @method void setTimeVersion(string $TimeVersion) Set Input parameter of `deployVersion`
 */
class CreateCosTokenV2Request extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string Package name
     */
    public $PkgName;

    /**
     * @var integer optType. 1: upload; 2: query
     */
    public $OptType;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var string Input parameter of `deployVersion`
     */
    public $TimeVersion;

    /**
     * @param string $ServiceId Service ID
     * @param string $PkgName Package name
     * @param integer $OptType optType. 1: upload; 2: query
     * @param integer $SourceChannel Source channel
     * @param string $TimeVersion Input parameter of `deployVersion`
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("TimeVersion",$param) and $param["TimeVersion"] !== null) {
            $this->TimeVersion = $param["TimeVersion"];
        }
    }
}
