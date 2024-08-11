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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the subpackage built in a compiling task
 *
 * @method string getPkgName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPkgName(string $PkgName) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPathPrefix() Obtain Prefix of the package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPathPrefix(string $PathPrefix) Set Prefix of the package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPkgSize() Obtain Package size in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPkgSize(integer $PkgSize) Set Package size in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPVersionCompileTaskSubSimpleInfo extends AbstractModel
{
    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PkgName;

    /**
     * @var string Prefix of the package name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PathPrefix;

    /**
     * @var integer Package size in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PkgSize;

    /**
     * @param string $PkgName Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PathPrefix Prefix of the package name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PkgSize Package size in bytes
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
        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("PathPrefix",$param) and $param["PathPrefix"] !== null) {
            $this->PathPrefix = $param["PathPrefix"];
        }

        if (array_key_exists("PkgSize",$param) and $param["PkgSize"] !== null) {
            $this->PkgSize = $param["PkgSize"];
        }
    }
}
