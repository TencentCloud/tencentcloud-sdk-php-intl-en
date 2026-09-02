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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Number of related assets of an image
 *
 * @method integer getId() Obtain <p>Image ID.</p>
 * @method void setId(integer $Id) Set <p>Image ID.</p>
 * @method integer getHostCount() Obtain <p>Number of servers associated with the image</p>
 * @method void setHostCount(integer $HostCount) Set <p>Number of servers associated with the image</p>
 * @method integer getContainerCount() Obtain <p>Number of containers associated with the image</p>
 * @method void setContainerCount(integer $ContainerCount) Set <p>Number of containers associated with the image</p>
 * @method string getOwnerAccountName() Obtain <p>Mirror associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Mirror associated account name</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the mirror</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the mirror</p>
 * @method string getOwnerUin() Obtain <p>Account uin of the mirror</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Account uin of the mirror</p>
 */
class ImageAssociatedAssetCount extends AbstractModel
{
    /**
     * @var integer <p>Image ID.</p>
     */
    public $Id;

    /**
     * @var integer <p>Number of servers associated with the image</p>
     */
    public $HostCount;

    /**
     * @var integer <p>Number of containers associated with the image</p>
     */
    public $ContainerCount;

    /**
     * @var string <p>Mirror associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the mirror</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Account uin of the mirror</p>
     */
    public $OwnerUin;

    /**
     * @param integer $Id <p>Image ID.</p>
     * @param integer $HostCount <p>Number of servers associated with the image</p>
     * @param integer $ContainerCount <p>Number of containers associated with the image</p>
     * @param string $OwnerAccountName <p>Mirror associated account name</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the mirror</p>
     * @param string $OwnerUin <p>Account uin of the mirror</p>
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

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
