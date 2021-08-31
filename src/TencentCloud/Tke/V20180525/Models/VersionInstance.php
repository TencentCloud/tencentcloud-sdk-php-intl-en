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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version Info
 *
 * @method string getName() Obtain Version name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Version name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Version Info
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version Info
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remark
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remark
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class VersionInstance extends AbstractModel
{
    /**
     * @var string Version name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Version Info
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Remark
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $Name Version name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Version Version Info
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Remark Remark
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
