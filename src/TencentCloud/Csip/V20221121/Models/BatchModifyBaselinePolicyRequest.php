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
 * BatchModifyBaselinePolicy request structure.
 *
 * @method array getPolicyIDList() Obtain <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
 * @method void setPolicyIDList(array $PolicyIDList) Set <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
 * @method CycleScanConf getCycleScanConf() Obtain <p>Period scan configuration; can be omitted if not modified. When Enable=1, IntervalType and IntervalValueList must be simultaneously passed in.</p>
 * @method void setCycleScanConf(CycleScanConf $CycleScanConf) Set <p>Period scan configuration; can be omitted if not modified. When Enable=1, IntervalType and IntervalValueList must be simultaneously passed in.</p>
 * @method boolean getAutoSyncItem() Obtain <p>Automatic synchronization switch for newly-added built-in detection items. true: automatically join; false: do not join.</p>
 * @method void setAutoSyncItem(boolean $AutoSyncItem) Set <p>Automatic synchronization switch for newly-added built-in detection items. true: automatically join; false: do not join.</p>
 * @method array getCategoryConf() Obtain <p>Categorization / subcategory / detection item hit configuration; can be omitted if not modified.</p>
 * @method void setCategoryConf(array $CategoryConf) Set <p>Categorization / subcategory / detection item hit configuration; can be omitted if not modified.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getCustomItemConf() Obtain <p>Configuration list of custom detection item values; can be omitted if not modified. In each element, RuleID and CustomItemID cannot both be 0.</p>
 * @method void setCustomItemConf(array $CustomItemConf) Set <p>Configuration list of custom detection item values; can be omitted if not modified. In each element, RuleID and CustomItemID cannot both be 0.</p>
 */
class BatchModifyBaselinePolicyRequest extends AbstractModel
{
    /**
     * @var array <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
     */
    public $PolicyIDList;

    /**
     * @var CycleScanConf <p>Period scan configuration; can be omitted if not modified. When Enable=1, IntervalType and IntervalValueList must be simultaneously passed in.</p>
     */
    public $CycleScanConf;

    /**
     * @var boolean <p>Automatic synchronization switch for newly-added built-in detection items. true: automatically join; false: do not join.</p>
     */
    public $AutoSyncItem;

    /**
     * @var array <p>Categorization / subcategory / detection item hit configuration; can be omitted if not modified.</p>
     */
    public $CategoryConf;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Configuration list of custom detection item values; can be omitted if not modified. In each element, RuleID and CustomItemID cannot both be 0.</p>
     */
    public $CustomItemConf;

    /**
     * @param array $PolicyIDList <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
     * @param CycleScanConf $CycleScanConf <p>Period scan configuration; can be omitted if not modified. When Enable=1, IntervalType and IntervalValueList must be simultaneously passed in.</p>
     * @param boolean $AutoSyncItem <p>Automatic synchronization switch for newly-added built-in detection items. true: automatically join; false: do not join.</p>
     * @param array $CategoryConf <p>Categorization / subcategory / detection item hit configuration; can be omitted if not modified.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $CustomItemConf <p>Configuration list of custom detection item values; can be omitted if not modified. In each element, RuleID and CustomItemID cannot both be 0.</p>
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
        if (array_key_exists("PolicyIDList",$param) and $param["PolicyIDList"] !== null) {
            $this->PolicyIDList = $param["PolicyIDList"];
        }

        if (array_key_exists("CycleScanConf",$param) and $param["CycleScanConf"] !== null) {
            $this->CycleScanConf = new CycleScanConf();
            $this->CycleScanConf->deserialize($param["CycleScanConf"]);
        }

        if (array_key_exists("AutoSyncItem",$param) and $param["AutoSyncItem"] !== null) {
            $this->AutoSyncItem = $param["AutoSyncItem"];
        }

        if (array_key_exists("CategoryConf",$param) and $param["CategoryConf"] !== null) {
            $this->CategoryConf = [];
            foreach ($param["CategoryConf"] as $key => $value){
                $obj = new BaselinePolicySystemCategoryConf();
                $obj->deserialize($value);
                array_push($this->CategoryConf, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CustomItemConf",$param) and $param["CustomItemConf"] !== null) {
            $this->CustomItemConf = [];
            foreach ($param["CustomItemConf"] as $key => $value){
                $obj = new BaselineCustomItemConf();
                $obj->deserialize($value);
                array_push($this->CustomItemConf, $obj);
            }
        }
    }
}
