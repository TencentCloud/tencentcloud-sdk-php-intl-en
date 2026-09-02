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
 * Statistical metrics in the header of the baseline overview page.
 *
 * @method integer getNotPassItemCount() Obtain <p>Current total count of failed check items (including hosts and container clusters).</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) Set <p>Current total count of failed check items (including hosts and container clusters).</p>
 * @method array getNotPassItemStatistic() Obtain <p>Statistics list of detection failed items by policy group.</p>
 * @method void setNotPassItemStatistic(array $NotPassItemStatistic) Set <p>Statistics list of detection failed items by policy group.</p>
 * @method integer getLastYearFixCount() Obtain <p>Total baseline risks fixed in the past one year.</p>
 * @method void setLastYearFixCount(integer $LastYearFixCount) Set <p>Total baseline risks fixed in the past one year.</p>
 */
class BaselineOverviewStatistic extends AbstractModel
{
    /**
     * @var integer <p>Current total count of failed check items (including hosts and container clusters).</p>
     */
    public $NotPassItemCount;

    /**
     * @var array <p>Statistics list of detection failed items by policy group.</p>
     */
    public $NotPassItemStatistic;

    /**
     * @var integer <p>Total baseline risks fixed in the past one year.</p>
     */
    public $LastYearFixCount;

    /**
     * @param integer $NotPassItemCount <p>Current total count of failed check items (including hosts and container clusters).</p>
     * @param array $NotPassItemStatistic <p>Statistics list of detection failed items by policy group.</p>
     * @param integer $LastYearFixCount <p>Total baseline risks fixed in the past one year.</p>
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
        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("NotPassItemStatistic",$param) and $param["NotPassItemStatistic"] !== null) {
            $this->NotPassItemStatistic = [];
            foreach ($param["NotPassItemStatistic"] as $key => $value){
                $obj = new NotPassItemStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemStatistic, $obj);
            }
        }

        if (array_key_exists("LastYearFixCount",$param) and $param["LastYearFixCount"] !== null) {
            $this->LastYearFixCount = $param["LastYearFixCount"];
        }
    }
}
