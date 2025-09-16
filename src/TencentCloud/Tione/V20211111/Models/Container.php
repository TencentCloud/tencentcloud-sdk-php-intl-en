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
 * Container information.
 *
 * @method string getName() Obtain Name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerId(string $ContainerId) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImage() Obtain Image address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImage(string $Image) Set Image address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ContainerStatus getStatus() Obtain Container status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(ContainerStatus $Status) Set Container status.Note: This field may return null, indicating that no valid values can be obtained.
 */
class Container extends AbstractModel
{
    /**
     * @var string Name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerId;

    /**
     * @var string Image address.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Image;

    /**
     * @var ContainerStatus Container status.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $Name Name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerId id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Image Image address.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ContainerStatus $Status Container status.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new ContainerStatus();
            $this->Status->deserialize($param["Status"]);
        }
    }
}
