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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic image information
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageTag() Obtain Image tag
 * @method void setImageTag(string $ImageTag) Set Image tag
 * @method string getForce() Obtain Forced scan
 * @method void setForce(string $Force) Set Forced scan
 * @method string getImageDigest() Obtain Image ID
 * @method void setImageDigest(string $ImageDigest) Set Image ID
 * @method string getRegistryType() Obtain Repository type
 * @method void setRegistryType(string $RegistryType) Set Repository type
 * @method string getImageRepoAddress() Obtain Image repository address
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image repository address
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image tag
     */
    public $ImageTag;

    /**
     * @var string Forced scan
     */
    public $Force;

    /**
     * @var string Image ID
     */
    public $ImageDigest;

    /**
     * @var string Repository type
     */
    public $RegistryType;

    /**
     * @var string Image repository address
     */
    public $ImageRepoAddress;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param string $InstanceName Instance name
     * @param string $Namespace Namespace
     * @param string $ImageName Image name
     * @param string $ImageTag Image tag
     * @param string $Force Forced scan
     * @param string $ImageDigest Image ID
     * @param string $RegistryType Repository type
     * @param string $ImageRepoAddress Image repository address
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
