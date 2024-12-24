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
 * SyncImages request structure.
 *
 * @method array getImageIds() Obtain Image ID list. You can obtain the image IDs in the following ways:<br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain the image IDs in the [Image console](https://console.cloud.tencent.com/cvm/image).<br>The image IDs should meet the following requirement:</li><li>The image ID should correspond to an image in the `NORMAL` state.</li>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
 * @method void setImageIds(array $ImageIds) Set Image ID list. You can obtain the image IDs in the following ways:<br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain the image IDs in the [Image console](https://console.cloud.tencent.com/cvm/image).<br>The image IDs should meet the following requirement:</li><li>The image ID should correspond to an image in the `NORMAL` state.</li>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
 * @method array getDestinationRegions() Obtain List of target synchronization regions, which should meet the following requirements:<br><li>It should be a valid region.</li><li>If it is a custom image, the target synchronization region cannot be the source region.</li><li>If it is a shared image, the target synchronization region only supports the source region, meaning the shared image will be copied as a custom image in the source region.</li><li>Partial region synchronization is not supported currently. For details, see [Copying Images](https://intl.cloud.tencent.com/document/product/213/4943?from_cn_redirect=1#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E).</li>For specific regional parameters, refer to [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
 * @method void setDestinationRegions(array $DestinationRegions) Set List of target synchronization regions, which should meet the following requirements:<br><li>It should be a valid region.</li><li>If it is a custom image, the target synchronization region cannot be the source region.</li><li>If it is a shared image, the target synchronization region only supports the source region, meaning the shared image will be copied as a custom image in the source region.</li><li>Partial region synchronization is not supported currently. For details, see [Copying Images](https://intl.cloud.tencent.com/document/product/213/4943?from_cn_redirect=1#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E).</li>For specific regional parameters, refer to [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
 * @method boolean getDryRun() Obtain Checks whether image synchronization can be initiated.

Default value: false.
 * @method void setDryRun(boolean $DryRun) Set Checks whether image synchronization can be initiated.

Default value: false.
 * @method string getImageName() Obtain Target image name. By default, the source image name is used.
 * @method void setImageName(string $ImageName) Set Target image name. By default, the source image name is used.
 * @method boolean getImageSetRequired() Obtain Whether to return the ID of the image created in the target region.

Default value: false.
 * @method void setImageSetRequired(boolean $ImageSetRequired) Set Whether to return the ID of the image created in the target region.

Default value: false.
 * @method boolean getEncrypt() Obtain Whether to synchronize as an encrypted custom image.
Default value is `false`.
Synchronization to an encrypted custom image is only supported within the same region.
 * @method void setEncrypt(boolean $Encrypt) Set Whether to synchronize as an encrypted custom image.
Default value is `false`.
Synchronization to an encrypted custom image is only supported within the same region.
 * @method string getKmsKeyId() Obtain KMS key ID used when synchronizing to an encrypted custom image. 
This parameter is valid only synchronizing to an encrypted image.
If KmsKeyId is not specified, the default CBS cloud product KMS key is used.
 * @method void setKmsKeyId(string $KmsKeyId) Set KMS key ID used when synchronizing to an encrypted custom image. 
This parameter is valid only synchronizing to an encrypted image.
If KmsKeyId is not specified, the default CBS cloud product KMS key is used.
 */
class SyncImagesRequest extends AbstractModel
{
    /**
     * @var array Image ID list. You can obtain the image IDs in the following ways:<br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain the image IDs in the [Image console](https://console.cloud.tencent.com/cvm/image).<br>The image IDs should meet the following requirement:</li><li>The image ID should correspond to an image in the `NORMAL` state.</li>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
     */
    public $ImageIds;

    /**
     * @var array List of target synchronization regions, which should meet the following requirements:<br><li>It should be a valid region.</li><li>If it is a custom image, the target synchronization region cannot be the source region.</li><li>If it is a shared image, the target synchronization region only supports the source region, meaning the shared image will be copied as a custom image in the source region.</li><li>Partial region synchronization is not supported currently. For details, see [Copying Images](https://intl.cloud.tencent.com/document/product/213/4943?from_cn_redirect=1#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E).</li>For specific regional parameters, refer to [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
     */
    public $DestinationRegions;

    /**
     * @var boolean Checks whether image synchronization can be initiated.

Default value: false.
     */
    public $DryRun;

    /**
     * @var string Target image name. By default, the source image name is used.
     */
    public $ImageName;

    /**
     * @var boolean Whether to return the ID of the image created in the target region.

Default value: false.
     */
    public $ImageSetRequired;

    /**
     * @var boolean Whether to synchronize as an encrypted custom image.
Default value is `false`.
Synchronization to an encrypted custom image is only supported within the same region.
     */
    public $Encrypt;

    /**
     * @var string KMS key ID used when synchronizing to an encrypted custom image. 
This parameter is valid only synchronizing to an encrypted image.
If KmsKeyId is not specified, the default CBS cloud product KMS key is used.
     */
    public $KmsKeyId;

    /**
     * @param array $ImageIds Image ID list. You can obtain the image IDs in the following ways:<br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain the image IDs in the [Image console](https://console.cloud.tencent.com/cvm/image).<br>The image IDs should meet the following requirement:</li><li>The image ID should correspond to an image in the `NORMAL` state.</li>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
     * @param array $DestinationRegions List of target synchronization regions, which should meet the following requirements:<br><li>It should be a valid region.</li><li>If it is a custom image, the target synchronization region cannot be the source region.</li><li>If it is a shared image, the target synchronization region only supports the source region, meaning the shared image will be copied as a custom image in the source region.</li><li>Partial region synchronization is not supported currently. For details, see [Copying Images](https://intl.cloud.tencent.com/document/product/213/4943?from_cn_redirect=1#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E).</li>For specific regional parameters, refer to [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
     * @param boolean $DryRun Checks whether image synchronization can be initiated.

Default value: false.
     * @param string $ImageName Target image name. By default, the source image name is used.
     * @param boolean $ImageSetRequired Whether to return the ID of the image created in the target region.

Default value: false.
     * @param boolean $Encrypt Whether to synchronize as an encrypted custom image.
Default value is `false`.
Synchronization to an encrypted custom image is only supported within the same region.
     * @param string $KmsKeyId KMS key ID used when synchronizing to an encrypted custom image. 
This parameter is valid only synchronizing to an encrypted image.
If KmsKeyId is not specified, the default CBS cloud product KMS key is used.
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("DestinationRegions",$param) and $param["DestinationRegions"] !== null) {
            $this->DestinationRegions = $param["DestinationRegions"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageSetRequired",$param) and $param["ImageSetRequired"] !== null) {
            $this->ImageSetRequired = $param["ImageSetRequired"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
