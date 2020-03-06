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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPublicNetStatus() Obtain Whether to enable public network access. Valid values: ['DISABLE', 'ENABLE']
 * @method void setPublicNetStatus(string $PublicNetStatus) Set Whether to enable public network access. Valid values: ['DISABLE', 'ENABLE']
 * @method EipConfigOut getEipConfig() Obtain EIP configuration
 * @method void setEipConfig(EipConfigOut $EipConfig) Set EIP configuration
 */

/**
 *Public network access configuration
 */
class PublicNetConfigOut extends AbstractModel
{
    /**
     * @var string Whether to enable public network access. Valid values: ['DISABLE', 'ENABLE']
     */
    public $PublicNetStatus;

    /**
     * @var EipConfigOut EIP configuration
     */
    public $EipConfig;
    /**
     * @param string $PublicNetStatus Whether to enable public network access. Valid values: ['DISABLE', 'ENABLE']
     * @param EipConfigOut $EipConfig EIP configuration
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
        if (array_key_exists("PublicNetStatus",$param) and $param["PublicNetStatus"] !== null) {
            $this->PublicNetStatus = $param["PublicNetStatus"];
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = new EipConfigOut();
            $this->EipConfig->deserialize($param["EipConfig"]);
        }
    }
}
