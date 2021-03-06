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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImage request structure.
 *
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getInstanceId() Obtain Instance ID used to create an image.
 * @method void setInstanceId(string $InstanceId) Set Instance ID used to create an image.
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method string getForcePoweroff() Obtain Whether to force shut down an instance to create an image when a soft shutdown fails
 * @method void setForcePoweroff(string $ForcePoweroff) Set Whether to force shut down an instance to create an image when a soft shutdown fails
 * @method string getSysprep() Obtain Whether to enable Sysprep when creating a Windows image. Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
 * @method void setSysprep(string $Sysprep) Set Whether to enable Sysprep when creating a Windows image. Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
 * @method array getDataDiskIds() Obtain Specified data disk ID included in the full image created from the instance.
 * @method void setDataDiskIds(array $DataDiskIds) Set Specified data disk ID included in the full image created from the instance.
 * @method array getSnapshotIds() Obtain Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
 * @method void setSnapshotIds(array $SnapshotIds) Set Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
 * @method boolean getDryRun() Obtain Success status of this request, without affecting the resources involved
 * @method void setDryRun(boolean $DryRun) Set Success status of this request, without affecting the resources involved
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Instance ID used to create an image.
     */
    public $InstanceId;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var string Whether to force shut down an instance to create an image when a soft shutdown fails
     */
    public $ForcePoweroff;

    /**
     * @var string Whether to enable Sysprep when creating a Windows image. Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
     */
    public $Sysprep;

    /**
     * @var array Specified data disk ID included in the full image created from the instance.
     */
    public $DataDiskIds;

    /**
     * @var array Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
     */
    public $SnapshotIds;

    /**
     * @var boolean Success status of this request, without affecting the resources involved
     */
    public $DryRun;

    /**
     * @param string $ImageName Image name
     * @param string $InstanceId Instance ID used to create an image.
     * @param string $ImageDescription Image description
     * @param string $ForcePoweroff Whether to force shut down an instance to create an image when a soft shutdown fails
     * @param string $Sysprep Whether to enable Sysprep when creating a Windows image. Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
     * @param array $DataDiskIds Specified data disk ID included in the full image created from the instance.
     * @param array $SnapshotIds Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
     * @param boolean $DryRun Success status of this request, without affecting the resources involved
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }

        if (array_key_exists("Sysprep",$param) and $param["Sysprep"] !== null) {
            $this->Sysprep = $param["Sysprep"];
        }

        if (array_key_exists("DataDiskIds",$param) and $param["DataDiskIds"] !== null) {
            $this->DataDiskIds = $param["DataDiskIds"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
