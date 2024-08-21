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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission information
 *
 * @method string getAccessType() Obtain Permission type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(string $AccessType) Set Permission type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceBaseInfo getResourceBaseInfo() Obtain Resource information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceBaseInfo(ResourceBaseInfo $ResourceBaseInfo) Set Resource information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAllowed() Obtain Authentication result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowed(boolean $Allowed) Set Authentication result
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PermissionResponseInfo extends AbstractModel
{
    /**
     * @var string Permission type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @var ResourceBaseInfo Resource information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceBaseInfo;

    /**
     * @var boolean Authentication result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Allowed;

    /**
     * @param string $AccessType Permission type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceBaseInfo $ResourceBaseInfo Resource information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Allowed Authentication result
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ResourceBaseInfo",$param) and $param["ResourceBaseInfo"] !== null) {
            $this->ResourceBaseInfo = new ResourceBaseInfo();
            $this->ResourceBaseInfo->deserialize($param["ResourceBaseInfo"]);
        }

        if (array_key_exists("Allowed",$param) and $param["Allowed"] !== null) {
            $this->Allowed = $param["Allowed"];
        }
    }
}
