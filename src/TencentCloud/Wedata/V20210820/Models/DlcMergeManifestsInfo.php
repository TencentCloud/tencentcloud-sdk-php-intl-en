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
 * Merge metadata Manifests governance items
 *
 * @method string getMergeManifestsEnable() Obtain Whether to enable merging metadata Manifests file governance items: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMergeManifestsEnable(string $MergeManifestsEnable) Set Whether to enable merging metadata Manifests file governance items: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngine() Obtain Engine name used to run merging metadata Manifests file governance items
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngine(string $Engine) Set Engine name used to run merging metadata Manifests file governance items
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIntervalMin() Obtain Merge Metadata Manifests file governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntervalMin(integer $IntervalMin) Set Merge Metadata Manifests file governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DlcMergeManifestsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable merging metadata Manifests file governance items: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MergeManifestsEnable;

    /**
     * @var string Engine name used to run merging metadata Manifests file governance items
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Engine;

    /**
     * @var integer Merge Metadata Manifests file governance runtime cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntervalMin;

    /**
     * @param string $MergeManifestsEnable Whether to enable merging metadata Manifests file governance items: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Engine Engine name used to run merging metadata Manifests file governance items
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IntervalMin Merge Metadata Manifests file governance runtime cycle, in minutes
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
        if (array_key_exists("MergeManifestsEnable",$param) and $param["MergeManifestsEnable"] !== null) {
            $this->MergeManifestsEnable = $param["MergeManifestsEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}
