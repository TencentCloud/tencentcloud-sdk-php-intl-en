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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function Resource Information
 *
 * @method string getPath() Obtain Resource PathNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setPath(string $Path) Set Resource PathNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getId() Obtain Resource Unique Identifier
 * @method void setId(string $Id) Set Resource Unique Identifier
 * @method string getMd5() Obtain Resource MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMd5(string $Md5) Set Resource MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Default is HDFS
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Default is HDFS
Note: This field may return null, indicating that no valid value can be obtained.
 */
class FunctionResource extends AbstractModel
{
    /**
     * @var string Resource PathNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Path;

    /**
     * @var string NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Resource Unique Identifier
     */
    public $Id;

    /**
     * @var string Resource MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Md5;

    /**
     * @var string Default is HDFS
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param string $Path Resource PathNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name NoNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Id Resource Unique Identifier
     * @param string $Md5 Resource MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Default is HDFS
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
