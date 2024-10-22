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
 * @method string getInstanceId() Obtain ID of the instance from which an image will be created. This parameter is required when using instance to create an image.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance from which an image will be created. This parameter is required when using instance to create an image.
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method string getForcePoweroff() Obtain Whether to perform forced power-off operation to create an image.
Valid values:<br><li>true: indicates that an image is created after forced power-off operation</li><br><li>false: indicates that an image is created in the power-on state</li><br><br>Default value: false.<br><br>Creating an image in the power-on state may result in some unbacked-up data, affecting data security.
 * @method void setForcePoweroff(string $ForcePoweroff) Set Whether to perform forced power-off operation to create an image.
Valid values:<br><li>true: indicates that an image is created after forced power-off operation</li><br><li>false: indicates that an image is created in the power-on state</li><br><br>Default value: false.<br><br>Creating an image in the power-on state may result in some unbacked-up data, affecting data security.
 * @method string getSysprep() Obtain Whether to enable Sysprep when creating a Windows image.
Valid values: `TRUE` and `FALSE`; default value: `FALSE`.

Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
 * @method void setSysprep(string $Sysprep) Set Whether to enable Sysprep when creating a Windows image.
Valid values: `TRUE` and `FALSE`; default value: `FALSE`.

Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
 * @method array getDataDiskIds() Obtain IDs of data disks included in the image. 
 * @method void setDataDiskIds(array $DataDiskIds) Set IDs of data disks included in the image. 
 * @method array getSnapshotIds() Obtain Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
 * @method void setSnapshotIds(array $SnapshotIds) Set Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
 * @method boolean getDryRun() Obtain Success status of this request, without affecting the resources involved
 * @method void setDryRun(boolean $DryRun) Set Success status of this request, without affecting the resources involved
 * @method array getTagSpecification() Obtain Tag description list. This parameter is used to bind a tag to a custom image.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description list. This parameter is used to bind a tag to a custom image.
 * @method string getImageFamily() Obtain Image family
 * @method void setImageFamily(string $ImageFamily) Set Image family
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string ID of the instance from which an image will be created. This parameter is required when using instance to create an image.
     */
    public $InstanceId;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var string Whether to perform forced power-off operation to create an image.
Valid values:<br><li>true: indicates that an image is created after forced power-off operation</li><br><li>false: indicates that an image is created in the power-on state</li><br><br>Default value: false.<br><br>Creating an image in the power-on state may result in some unbacked-up data, affecting data security.
     */
    public $ForcePoweroff;

    /**
     * @var string Whether to enable Sysprep when creating a Windows image.
Valid values: `TRUE` and `FALSE`; default value: `FALSE`.

Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
     */
    public $Sysprep;

    /**
     * @var array IDs of data disks included in the image. 
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
     * @var array Tag description list. This parameter is used to bind a tag to a custom image.
     */
    public $TagSpecification;

    /**
     * @var string Image family
     */
    public $ImageFamily;

    /**
     * @param string $ImageName Image name
     * @param string $InstanceId ID of the instance from which an image will be created. This parameter is required when using instance to create an image.
     * @param string $ImageDescription Image description
     * @param string $ForcePoweroff Whether to perform forced power-off operation to create an image.
Valid values:<br><li>true: indicates that an image is created after forced power-off operation</li><br><li>false: indicates that an image is created in the power-on state</li><br><br>Default value: false.<br><br>Creating an image in the power-on state may result in some unbacked-up data, affecting data security.
     * @param string $Sysprep Whether to enable Sysprep when creating a Windows image.
Valid values: `TRUE` and `FALSE`; default value: `FALSE`.

Click [here](https://intl.cloud.tencent.com/document/product/213/43498?from_cn_redirect=1) to learn more about Sysprep.
     * @param array $DataDiskIds IDs of data disks included in the image. 
     * @param array $SnapshotIds Specified snapshot ID used to create an image. A system disk snapshot must be included. It cannot be passed together with `InstanceId`.
     * @param boolean $DryRun Success status of this request, without affecting the resources involved
     * @param array $TagSpecification Tag description list. This parameter is used to bind a tag to a custom image.
     * @param string $ImageFamily Image family
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

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }
    }
}
