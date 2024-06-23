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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Layout Governance Item
 *
 * @method string getRewriteDataEnable() Obtain Whether to enable data layout governance item: enable (start), disable (do not enable, default)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRewriteDataEnable(string $RewriteDataEnable) Set Whether to enable data layout governance item: enable (start), disable (do not enable, default)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngine() Obtain Engine name used to run data layout governance item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngine(string $Engine) Set Engine name used to run data layout governance item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMinInputFiles() Obtain Number of files executed by the rearrangement task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMinInputFiles(integer $MinInputFiles) Set Number of files executed by the rearrangement task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTargetFileSizeBytes() Obtain Data file size after data rearrangement, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetFileSizeBytes(integer $TargetFileSizeBytes) Set Data file size after data rearrangement, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIntervalMin() Obtain Data layout governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntervalMin(integer $IntervalMin) Set Data layout governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DlcRewriteDataInfo extends AbstractModel
{
    /**
     * @var string Whether to enable data layout governance item: enable (start), disable (do not enable, default)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RewriteDataEnable;

    /**
     * @var string Engine name used to run data layout governance item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Engine;

    /**
     * @var integer Number of files executed by the rearrangement task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MinInputFiles;

    /**
     * @var integer Data file size after data rearrangement, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetFileSizeBytes;

    /**
     * @var integer Data layout governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntervalMin;

    /**
     * @param string $RewriteDataEnable Whether to enable data layout governance item: enable (start), disable (do not enable, default)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Engine Engine name used to run data layout governance item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MinInputFiles Number of files executed by the rearrangement task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TargetFileSizeBytes Data file size after data rearrangement, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IntervalMin Data layout governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RewriteDataEnable",$param) and $param["RewriteDataEnable"] !== null) {
            $this->RewriteDataEnable = $param["RewriteDataEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("MinInputFiles",$param) and $param["MinInputFiles"] !== null) {
            $this->MinInputFiles = $param["MinInputFiles"];
        }

        if (array_key_exists("TargetFileSizeBytes",$param) and $param["TargetFileSizeBytes"] !== null) {
            $this->TargetFileSizeBytes = $param["TargetFileSizeBytes"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}
