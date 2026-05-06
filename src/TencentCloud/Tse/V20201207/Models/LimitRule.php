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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter throttling rule
 *
 * @method array getFilters() Obtain Request matching conditions
 * @method void setFilters(array $Filters) Set Request matching conditions
 * @method array getLimitBy() Obtain Parameter throttling based on composite
 * @method void setLimitBy(array $LimitBy) Set Parameter throttling based on composite
 * @method array getQpsThresholds() Obtain Throttling threshold
 * @method void setQpsThresholds(array $QpsThresholds) Set Throttling threshold
 * @method array getAccurateQpsThresholds() Obtain Precise throttling threshold
 * @method void setAccurateQpsThresholds(array $AccurateQpsThresholds) Set Precise throttling threshold
 */
class LimitRule extends AbstractModel
{
    /**
     * @var array Request matching conditions
     */
    public $Filters;

    /**
     * @var array Parameter throttling based on composite
     */
    public $LimitBy;

    /**
     * @var array Throttling threshold
     */
    public $QpsThresholds;

    /**
     * @var array Precise throttling threshold
     */
    public $AccurateQpsThresholds;

    /**
     * @param array $Filters Request matching conditions
     * @param array $LimitBy Parameter throttling based on composite
     * @param array $QpsThresholds Throttling threshold
     * @param array $AccurateQpsThresholds Precise throttling threshold
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RuleFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("LimitBy",$param) and $param["LimitBy"] !== null) {
            $this->LimitBy = [];
            foreach ($param["LimitBy"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->LimitBy, $obj);
            }
        }

        if (array_key_exists("QpsThresholds",$param) and $param["QpsThresholds"] !== null) {
            $this->QpsThresholds = [];
            foreach ($param["QpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->QpsThresholds, $obj);
            }
        }

        if (array_key_exists("AccurateQpsThresholds",$param) and $param["AccurateQpsThresholds"] !== null) {
            $this->AccurateQpsThresholds = [];
            foreach ($param["AccurateQpsThresholds"] as $key => $value){
                $obj = new AccurateQpsThreshold();
                $obj->deserialize($value);
                array_push($this->AccurateQpsThresholds, $obj);
            }
        }
    }
}
