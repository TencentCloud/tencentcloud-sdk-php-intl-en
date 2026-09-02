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
 * Aggregation results of the baseline subcategory dimension, carrying the pass/fail statistics of detection items under this subcategory.
 *
 * @method BaselineCategory getCategory() Obtain <p>Basic information of the baseline subcategory (including category ID, name, and description).</p>
 * @method void setCategory(BaselineCategory $Category) Set <p>Basic information of the baseline subcategory (including category ID, name, and description).</p>
 * @method array getNotPassItemRiskLevelStatistic() Obtain <p>Distribution statistics of detection-failed items in this subcategory by risk level.</p>
 * @method void setNotPassItemRiskLevelStatistic(array $NotPassItemRiskLevelStatistic) Set <p>Distribution statistics of detection-failed items in this subcategory by risk level.</p>
 * @method integer getPassItemCount() Obtain <p>Number of detection items with a PASS result in this subcategory.</p>
 * @method void setPassItemCount(integer $PassItemCount) Set <p>Number of detection items with a PASS result in this subcategory.</p>
 * @method integer getNotPassItemCount() Obtain <p>Number of detection items with NOT_PASS result in this subcategory.</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) Set <p>Number of detection items with NOT_PASS result in this subcategory.</p>
 * @method float getPassRate() Obtain <p>Pass rate of detection items under this subcategory, unit: percentage (0-100), rounded to two decimal places.</p>
 * @method void setPassRate(float $PassRate) Set <p>Pass rate of detection items under this subcategory, unit: percentage (0-100), rounded to two decimal places.</p>
 * @method boolean getScanned() Obtain <p>Whether the baseline category has been scanned</p>
 * @method void setScanned(boolean $Scanned) Set <p>Whether the baseline category has been scanned</p>
 */
class BaselineAggregatedCategory extends AbstractModel
{
    /**
     * @var BaselineCategory <p>Basic information of the baseline subcategory (including category ID, name, and description).</p>
     */
    public $Category;

    /**
     * @var array <p>Distribution statistics of detection-failed items in this subcategory by risk level.</p>
     */
    public $NotPassItemRiskLevelStatistic;

    /**
     * @var integer <p>Number of detection items with a PASS result in this subcategory.</p>
     */
    public $PassItemCount;

    /**
     * @var integer <p>Number of detection items with NOT_PASS result in this subcategory.</p>
     */
    public $NotPassItemCount;

    /**
     * @var float <p>Pass rate of detection items under this subcategory, unit: percentage (0-100), rounded to two decimal places.</p>
     */
    public $PassRate;

    /**
     * @var boolean <p>Whether the baseline category has been scanned</p>
     */
    public $Scanned;

    /**
     * @param BaselineCategory $Category <p>Basic information of the baseline subcategory (including category ID, name, and description).</p>
     * @param array $NotPassItemRiskLevelStatistic <p>Distribution statistics of detection-failed items in this subcategory by risk level.</p>
     * @param integer $PassItemCount <p>Number of detection items with a PASS result in this subcategory.</p>
     * @param integer $NotPassItemCount <p>Number of detection items with NOT_PASS result in this subcategory.</p>
     * @param float $PassRate <p>Pass rate of detection items under this subcategory, unit: percentage (0-100), rounded to two decimal places.</p>
     * @param boolean $Scanned <p>Whether the baseline category has been scanned</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new BaselineCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("NotPassItemRiskLevelStatistic",$param) and $param["NotPassItemRiskLevelStatistic"] !== null) {
            $this->NotPassItemRiskLevelStatistic = [];
            foreach ($param["NotPassItemRiskLevelStatistic"] as $key => $value){
                $obj = new BaselineRiskLevelStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemRiskLevelStatistic, $obj);
            }
        }

        if (array_key_exists("PassItemCount",$param) and $param["PassItemCount"] !== null) {
            $this->PassItemCount = $param["PassItemCount"];
        }

        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("Scanned",$param) and $param["Scanned"] !== null) {
            $this->Scanned = $param["Scanned"];
        }
    }
}
