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
 * Subtask information of image repository scanning
 *
 * @method integer getSubTaskId() Obtain <p>Task sub-id</p>
 * @method void setSubTaskId(integer $SubTaskId) Set <p>Task sub-id</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getImageTag() Obtain <p>Image tag</p>
 * @method void setImageTag(string $ImageTag) Set <p>Image tag</p>
 * @method string getScanStatus() Obtain <p>Task status</p><p>Enumeration values:</p><ul><li>FINISHED: Scan complete</li><li>SCANNING: Scanning</li><li>CANCELLED: Canceled</li><li>SCAN_EXCEPTION: Scan exception</li></ul>
 * @method void setScanStatus(string $ScanStatus) Set <p>Task status</p><p>Enumeration values:</p><ul><li>FINISHED: Scan complete</li><li>SCANNING: Scanning</li><li>CANCELLED: Canceled</li><li>SCAN_EXCEPTION: Scan exception</li></ul>
 * @method string getFailedReason() Obtain <p>Failure reason</p>
 * @method void setFailedReason(string $FailedReason) Set <p>Failure reason</p>
 * @method string getSolution() Obtain <p>Solution.</p>
 * @method void setSolution(string $Solution) Set <p>Solution.</p>
 * @method string getOwnerAccountName() Obtain <p>Account name of the scheduled task</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Account name of the scheduled task</p>
 * @method string getOwnerUin() Obtain <p>uin of the account associated with the scheduled task</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the account associated with the scheduled task</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the scheduled task</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the scheduled task</p>
 * @method boolean getIsLatestImage() Obtain <p>Whether it is the newest image</p>
 * @method void setIsLatestImage(boolean $IsLatestImage) Set <p>Whether it is the newest image</p>
 * @method string getImageRepoAddress() Obtain <p>Image address</p>
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set <p>Image address</p>
 * @method string getRegistryType() Obtain <p>Image repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Image repository type</p>
 */
class ImageRegistryScanSubTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>Task sub-id</p>
     */
    public $SubTaskId;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Image tag</p>
     */
    public $ImageTag;

    /**
     * @var string <p>Task status</p><p>Enumeration values:</p><ul><li>FINISHED: Scan complete</li><li>SCANNING: Scanning</li><li>CANCELLED: Canceled</li><li>SCAN_EXCEPTION: Scan exception</li></ul>
     */
    public $ScanStatus;

    /**
     * @var string <p>Failure reason</p>
     */
    public $FailedReason;

    /**
     * @var string <p>Solution.</p>
     */
    public $Solution;

    /**
     * @var string <p>Account name of the scheduled task</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>uin of the account associated with the scheduled task</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the account associated with the scheduled task</p>
     */
    public $OwnerAppId;

    /**
     * @var boolean <p>Whether it is the newest image</p>
     */
    public $IsLatestImage;

    /**
     * @var string <p>Image address</p>
     */
    public $ImageRepoAddress;

    /**
     * @var string <p>Image repository type</p>
     */
    public $RegistryType;

    /**
     * @param integer $SubTaskId <p>Task sub-id</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $ImageTag <p>Image tag</p>
     * @param string $ScanStatus <p>Task status</p><p>Enumeration values:</p><ul><li>FINISHED: Scan complete</li><li>SCANNING: Scanning</li><li>CANCELLED: Canceled</li><li>SCAN_EXCEPTION: Scan exception</li></ul>
     * @param string $FailedReason <p>Failure reason</p>
     * @param string $Solution <p>Solution.</p>
     * @param string $OwnerAccountName <p>Account name of the scheduled task</p>
     * @param string $OwnerUin <p>uin of the account associated with the scheduled task</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the scheduled task</p>
     * @param boolean $IsLatestImage <p>Whether it is the newest image</p>
     * @param string $ImageRepoAddress <p>Image address</p>
     * @param string $RegistryType <p>Image repository type</p>
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
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }
    }
}
