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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GooseFS configuration parameters.
 *
 * @method string getId() Obtain GooseFS instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set GooseFS instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain GooseFS type, including GooseFS and GooseFSx.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set GooseFS type, including GooseFS and GooseFSx.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Path to mount the GooseFSx instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Path to mount the GooseFSx instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNameSpace() Obtain GooseFS namespace.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNameSpace(string $NameSpace) Set GooseFS namespace.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GooseFS extends AbstractModel
{
    /**
     * @var string GooseFS instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string GooseFS type, including GooseFS and GooseFSx.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Path to mount the GooseFSx instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string GooseFS namespace.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NameSpace;

    /**
     * @param string $Id GooseFS instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type GooseFS type, including GooseFS and GooseFSx.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Path to mount the GooseFSx instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NameSpace GooseFS namespace.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }
    }
}
