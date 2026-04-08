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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCompactEnable() Obtain 
 * @method void setCompactEnable(string $CompactEnable) Set 
 * @method string getDeleteEnable() Obtain 
 * @method void setDeleteEnable(string $DeleteEnable) Set 
 * @method integer getMinInputFiles() Obtain 
 * @method void setMinInputFiles(integer $MinInputFiles) Set 
 * @method integer getTargetFileSizeBytes() Obtain 
 * @method void setTargetFileSizeBytes(integer $TargetFileSizeBytes) Set 
 * @method integer getRetainLast() Obtain 
 * @method void setRetainLast(integer $RetainLast) Set 
 * @method integer getBeforeDays() Obtain 
 * @method void setBeforeDays(integer $BeforeDays) Set 
 * @method integer getExpiredSnapshotsIntervalMin() Obtain 
 * @method void setExpiredSnapshotsIntervalMin(integer $ExpiredSnapshotsIntervalMin) Set 
 * @method integer getRemoveOrphanIntervalMin() Obtain 
 * @method void setRemoveOrphanIntervalMin(integer $RemoveOrphanIntervalMin) Set 
 * @method string getCowCompactEnable() Obtain 
 * @method void setCowCompactEnable(string $CowCompactEnable) Set 
 * @method string getCompactStrategy() Obtain 
 * @method void setCompactStrategy(string $CompactStrategy) Set 
 * @method array getSortOrders() Obtain 
 * @method void setSortOrders(array $SortOrders) Set 
 */
class WrittenAdvancePolicy extends AbstractModel
{
    /**
     * @var string 
     */
    public $CompactEnable;

    /**
     * @var string 
     */
    public $DeleteEnable;

    /**
     * @var integer 
     */
    public $MinInputFiles;

    /**
     * @var integer 
     */
    public $TargetFileSizeBytes;

    /**
     * @var integer 
     */
    public $RetainLast;

    /**
     * @var integer 
     */
    public $BeforeDays;

    /**
     * @var integer 
     */
    public $ExpiredSnapshotsIntervalMin;

    /**
     * @var integer 
     */
    public $RemoveOrphanIntervalMin;

    /**
     * @var string 
     */
    public $CowCompactEnable;

    /**
     * @var string 
     */
    public $CompactStrategy;

    /**
     * @var array 
     */
    public $SortOrders;

    /**
     * @param string $CompactEnable 
     * @param string $DeleteEnable 
     * @param integer $MinInputFiles 
     * @param integer $TargetFileSizeBytes 
     * @param integer $RetainLast 
     * @param integer $BeforeDays 
     * @param integer $ExpiredSnapshotsIntervalMin 
     * @param integer $RemoveOrphanIntervalMin 
     * @param string $CowCompactEnable 
     * @param string $CompactStrategy 
     * @param array $SortOrders 
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
        if (array_key_exists("CompactEnable",$param) and $param["CompactEnable"] !== null) {
            $this->CompactEnable = $param["CompactEnable"];
        }

        if (array_key_exists("DeleteEnable",$param) and $param["DeleteEnable"] !== null) {
            $this->DeleteEnable = $param["DeleteEnable"];
        }

        if (array_key_exists("MinInputFiles",$param) and $param["MinInputFiles"] !== null) {
            $this->MinInputFiles = $param["MinInputFiles"];
        }

        if (array_key_exists("TargetFileSizeBytes",$param) and $param["TargetFileSizeBytes"] !== null) {
            $this->TargetFileSizeBytes = $param["TargetFileSizeBytes"];
        }

        if (array_key_exists("RetainLast",$param) and $param["RetainLast"] !== null) {
            $this->RetainLast = $param["RetainLast"];
        }

        if (array_key_exists("BeforeDays",$param) and $param["BeforeDays"] !== null) {
            $this->BeforeDays = $param["BeforeDays"];
        }

        if (array_key_exists("ExpiredSnapshotsIntervalMin",$param) and $param["ExpiredSnapshotsIntervalMin"] !== null) {
            $this->ExpiredSnapshotsIntervalMin = $param["ExpiredSnapshotsIntervalMin"];
        }

        if (array_key_exists("RemoveOrphanIntervalMin",$param) and $param["RemoveOrphanIntervalMin"] !== null) {
            $this->RemoveOrphanIntervalMin = $param["RemoveOrphanIntervalMin"];
        }

        if (array_key_exists("CowCompactEnable",$param) and $param["CowCompactEnable"] !== null) {
            $this->CowCompactEnable = $param["CowCompactEnable"];
        }

        if (array_key_exists("CompactStrategy",$param) and $param["CompactStrategy"] !== null) {
            $this->CompactStrategy = $param["CompactStrategy"];
        }

        if (array_key_exists("SortOrders",$param) and $param["SortOrders"] !== null) {
            $this->SortOrders = [];
            foreach ($param["SortOrders"] as $key => $value){
                $obj = new SortOrder();
                $obj->deserialize($value);
                array_push($this->SortOrders, $obj);
            }
        }
    }
}
