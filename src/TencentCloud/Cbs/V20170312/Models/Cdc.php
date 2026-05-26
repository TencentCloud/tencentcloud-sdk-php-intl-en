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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCageId() Obtain 
 * @method void setCageId(string $CageId) Set 
 * @method string getCdcState() Obtain Exclusive cluster status. value ranges from:<br><li>NORMAL: NORMAL;</li><br><li>CLOSED: CLOSED. at this time, the exclusive cluster will be unavailable to create new cloud disks;</li><br><li>FAULT: abnormal exclusive cluster status. at this point, the exclusive cluster will be inoperable, and the tencent cloud ops team will promptly fix the cluster;</li><br><li>ISOLATED: the exclusive cluster is ISOLATED due to not renewed timely. at this moment, the exclusive cluster will be unavailable to create new cloud disks, and the corresponding cloud disks will also be inoperable.</li>.
 * @method void setCdcState(string $CdcState) Set Exclusive cluster status. value ranges from:<br><li>NORMAL: NORMAL;</li><br><li>CLOSED: CLOSED. at this time, the exclusive cluster will be unavailable to create new cloud disks;</li><br><li>FAULT: abnormal exclusive cluster status. at this point, the exclusive cluster will be inoperable, and the tencent cloud ops team will promptly fix the cluster;</li><br><li>ISOLATED: the exclusive cluster is ISOLATED due to not renewed timely. at this moment, the exclusive cluster will be unavailable to create new cloud disks, and the corresponding cloud disks will also be inoperable.</li>.
 * @method string getZone() Obtain Specifies the AZ ID of the exclusive cluster.
 * @method void setZone(string $Zone) Set Specifies the AZ ID of the exclusive cluster.
 * @method string getCdcName() Obtain 
 * @method void setCdcName(string $CdcName) Set 
 * @method CdcSize getCdcResource() Obtain Specifies the capacity size of the dedicated cluster.
 * @method void setCdcResource(CdcSize $CdcResource) Set Specifies the capacity size of the dedicated cluster.
 * @method string getCdcId() Obtain 
 * @method void setCdcId(string $CdcId) Set 
 * @method string getDiskType() Obtain Exclusive cluster type. valid values: <br><li>CLOUD_BASIC: BASIC CLOUD disk cluster</li><br><li>CLOUD_PREMIUM: high-performance CLOUD block storage cluster</li><br><li>CLOUD_SSD: SSD CLOUD disk cluster.</li>.
 * @method void setDiskType(string $DiskType) Set Exclusive cluster type. valid values: <br><li>CLOUD_BASIC: BASIC CLOUD disk cluster</li><br><li>CLOUD_PREMIUM: high-performance CLOUD block storage cluster</li><br><li>CLOUD_SSD: SSD CLOUD disk cluster.</li>.
 * @method string getExpiredTime() Obtain Expiry time of the dedicated cloud disk cluster.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiry time of the dedicated cloud disk cluster.
 * @method string getCreatedTime() Obtain Creation time of the resource pool.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the resource pool.
 * @method integer getDiskNumber() Obtain Number of cloud disks created in the current cluster.
 * @method void setDiskNumber(integer $DiskNumber) Set Number of cloud disks created in the current cluster.
 */
class Cdc extends AbstractModel
{
    /**
     * @var string 
     */
    public $CageId;

    /**
     * @var string Exclusive cluster status. value ranges from:<br><li>NORMAL: NORMAL;</li><br><li>CLOSED: CLOSED. at this time, the exclusive cluster will be unavailable to create new cloud disks;</li><br><li>FAULT: abnormal exclusive cluster status. at this point, the exclusive cluster will be inoperable, and the tencent cloud ops team will promptly fix the cluster;</li><br><li>ISOLATED: the exclusive cluster is ISOLATED due to not renewed timely. at this moment, the exclusive cluster will be unavailable to create new cloud disks, and the corresponding cloud disks will also be inoperable.</li>.
     */
    public $CdcState;

    /**
     * @var string Specifies the AZ ID of the exclusive cluster.
     */
    public $Zone;

    /**
     * @var string 
     */
    public $CdcName;

    /**
     * @var CdcSize Specifies the capacity size of the dedicated cluster.
     */
    public $CdcResource;

    /**
     * @var string 
     */
    public $CdcId;

    /**
     * @var string Exclusive cluster type. valid values: <br><li>CLOUD_BASIC: BASIC CLOUD disk cluster</li><br><li>CLOUD_PREMIUM: high-performance CLOUD block storage cluster</li><br><li>CLOUD_SSD: SSD CLOUD disk cluster.</li>.
     */
    public $DiskType;

    /**
     * @var string Expiry time of the dedicated cloud disk cluster.
     */
    public $ExpiredTime;

    /**
     * @var string Creation time of the resource pool.
     */
    public $CreatedTime;

    /**
     * @var integer Number of cloud disks created in the current cluster.
     */
    public $DiskNumber;

    /**
     * @param string $CageId 
     * @param string $CdcState Exclusive cluster status. value ranges from:<br><li>NORMAL: NORMAL;</li><br><li>CLOSED: CLOSED. at this time, the exclusive cluster will be unavailable to create new cloud disks;</li><br><li>FAULT: abnormal exclusive cluster status. at this point, the exclusive cluster will be inoperable, and the tencent cloud ops team will promptly fix the cluster;</li><br><li>ISOLATED: the exclusive cluster is ISOLATED due to not renewed timely. at this moment, the exclusive cluster will be unavailable to create new cloud disks, and the corresponding cloud disks will also be inoperable.</li>.
     * @param string $Zone Specifies the AZ ID of the exclusive cluster.
     * @param string $CdcName 
     * @param CdcSize $CdcResource Specifies the capacity size of the dedicated cluster.
     * @param string $CdcId 
     * @param string $DiskType Exclusive cluster type. valid values: <br><li>CLOUD_BASIC: BASIC CLOUD disk cluster</li><br><li>CLOUD_PREMIUM: high-performance CLOUD block storage cluster</li><br><li>CLOUD_SSD: SSD CLOUD disk cluster.</li>.
     * @param string $ExpiredTime Expiry time of the dedicated cloud disk cluster.
     * @param string $CreatedTime Creation time of the resource pool.
     * @param integer $DiskNumber Number of cloud disks created in the current cluster.
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
        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("CdcState",$param) and $param["CdcState"] !== null) {
            $this->CdcState = $param["CdcState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }

        if (array_key_exists("CdcResource",$param) and $param["CdcResource"] !== null) {
            $this->CdcResource = new CdcSize();
            $this->CdcResource->deserialize($param["CdcResource"]);
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DiskNumber",$param) and $param["DiskNumber"] !== null) {
            $this->DiskNumber = $param["DiskNumber"];
        }
    }
}
