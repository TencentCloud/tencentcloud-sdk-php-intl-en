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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom metric collection object.
 *
 * @method string getPort() Obtain Port. Value range: [1,65535].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(string $Port) Set Port. Value range: [1,65535].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Metric address. Verification format: ^/[a-zA-Z0-9-_./]*$.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Metric address. Verification format: ^/[a-zA-Z0-9-_./]*$.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNamespaces() Obtain Namespace list.
-Supports up to 100.
-Check format of namespace `[a-z0-9]([-a-z0-9]*[a-z0-9])?`. Length cannot exceed 63.
-namespace must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaces(array $Namespaces) Set Namespace list.
-Supports up to 100.
-Check format of namespace `[a-z0-9]([-a-z0-9]*[a-z0-9])?`. Length cannot exceed 63.
-namespace must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPodLabel() Obtain Pod tag.
-supports a maximum of 100

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodLabel(array $PodLabel) Set Pod tag.
-supports a maximum of 100

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CustomMetricSpec extends AbstractModel
{
    /**
     * @var string Port. Value range: [1,65535].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Metric address. Verification format: ^/[a-zA-Z0-9-_./]*$.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var array Namespace list.
-Supports up to 100.
-Check format of namespace `[a-z0-9]([-a-z0-9]*[a-z0-9])?`. Length cannot exceed 63.
-namespace must be unique
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespaces;

    /**
     * @var array Pod tag.
-supports a maximum of 100

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodLabel;

    /**
     * @param string $Port Port. Value range: [1,65535].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Metric address. Verification format: ^/[a-zA-Z0-9-_./]*$.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Namespaces Namespace list.
-Supports up to 100.
-Check format of namespace `[a-z0-9]([-a-z0-9]*[a-z0-9])?`. Length cannot exceed 63.
-namespace must be unique
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PodLabel Pod tag.
-supports a maximum of 100

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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("PodLabel",$param) and $param["PodLabel"] !== null) {
            $this->PodLabel = [];
            foreach ($param["PodLabel"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->PodLabel, $obj);
            }
        }
    }
}
