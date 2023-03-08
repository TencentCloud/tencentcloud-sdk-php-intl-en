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
 * @method array getImageIds() Obtain List of image IDs. You can obtain the image IDs in two ways: <br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response. <br><li>Find the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>The specified images must meet the following requirement: <br><li>the images must be in the `NORMAL` state. <br>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
 * @method void setImageIds(array $ImageIds) Set List of image IDs. You can obtain the image IDs in two ways: <br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response. <br><li>Find the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>The specified images must meet the following requirement: <br><li>the images must be in the `NORMAL` state. <br>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
 * @method array getDestinationRegions() Obtain List of destination regions for synchronization. Limits:<br><li>It must be a valid region.<br><li>For a custom image, the destination region cannot be the source region.<br><li>For a shared image, the destination region must be the source region, which indicates to create a copy of the image as a custom image in the same region.<br><li>Image synchronization is only available in limited regions.<br>See [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
 * @method void setDestinationRegions(array $DestinationRegions) Set List of destination regions for synchronization. Limits:<br><li>It must be a valid region.<br><li>For a custom image, the destination region cannot be the source region.<br><li>For a shared image, the destination region must be the source region, which indicates to create a copy of the image as a custom image in the same region.<br><li>Image synchronization is only available in limited regions.<br>See [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
 * @method boolean getDryRun() Obtain Checks whether image synchronization can be initiated.
 * @method void setDryRun(boolean $DryRun) Set Checks whether image synchronization can be initiated.
 * @method string getImageName() Obtain Destination image name.
 * @method void setImageName(string $ImageName) Set Destination image name.
 * @method boolean getImageSetRequired() Obtain Whether to return the ID of image created in the destination region
 * @method void setImageSetRequired(boolean $ImageSetRequired) Set Whether to return the ID of image created in the destination region
 */
class SyncImagesRequest extends AbstractModel
{
    /**
     * @var array List of image IDs. You can obtain the image IDs in two ways: <br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response. <br><li>Find the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>The specified images must meet the following requirement: <br><li>the images must be in the `NORMAL` state. <br>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
     */
    public $ImageIds;

    /**
     * @var array List of destination regions for synchronization. Limits:<br><li>It must be a valid region.<br><li>For a custom image, the destination region cannot be the source region.<br><li>For a shared image, the destination region must be the source region, which indicates to create a copy of the image as a custom image in the same region.<br><li>Image synchronization is only available in limited regions.<br>See [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
     */
    public $DestinationRegions;

    /**
     * @var boolean Checks whether image synchronization can be initiated.
     */
    public $DryRun;

    /**
     * @var string Destination image name.
     */
    public $ImageName;

    /**
     * @var boolean Whether to return the ID of image created in the destination region
     */
    public $ImageSetRequired;

    /**
     * @param array $ImageIds List of image IDs. You can obtain the image IDs in two ways: <br><li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response. <br><li>Find the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>The specified images must meet the following requirement: <br><li>the images must be in the `NORMAL` state. <br>For more information on image status, see [Image Data Table](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image).
     * @param array $DestinationRegions List of destination regions for synchronization. Limits:<br><li>It must be a valid region.<br><li>For a custom image, the destination region cannot be the source region.<br><li>For a shared image, the destination region must be the source region, which indicates to create a copy of the image as a custom image in the same region.<br><li>Image synchronization is only available in limited regions.<br>See [Region](https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1).
     * @param boolean $DryRun Checks whether image synchronization can be initiated.
     * @param string $ImageName Destination image name.
     * @param boolean $ImageSetRequired Whether to return the ID of image created in the destination region
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
    }
}
