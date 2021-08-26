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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosToken request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getPkgName() Obtain Package name
 * @method void setPkgName(string $PkgName) Set Package name
 * @method integer getOptType() Obtain Operation type. 1: upload; 2: query
 * @method void setOptType(integer $OptType) Set Operation type. 1: upload; 2: query
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method string getTimeVersion() Obtain Input parameter of `deployVersion`
 * @method void setTimeVersion(string $TimeVersion) Set Input parameter of `deployVersion`
 */
class CreateCosTokenRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Package name
     */
    public $PkgName;

    /**
     * @var integer Operation type. 1: upload; 2: query
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
     * @param string $ApplicationId Application ID
     * @param string $PkgName Package name
     * @param integer $OptType Operation type. 1: upload; 2: query
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
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
