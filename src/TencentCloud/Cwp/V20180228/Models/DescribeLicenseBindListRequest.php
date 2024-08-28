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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseBindList request structure.
 *
 * @method integer getLicenseId() Obtain Authorization ID
 * @method void setLicenseId(integer $LicenseId) Set Authorization ID
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method array getFilters() Obtain <li>InstanceID, IP,

and MachineName for fuzzy search</li>
 * @method void setFilters(array $Filters) Set <li>InstanceID, IP,

and MachineName for fuzzy search</li>
 * @method integer getLimit() Obtain Limit number, 10 by default.
 * @method void setLimit(integer $Limit) Set Limit number, 10 by default.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeLicenseBindListRequest extends AbstractModel
{
    /**
     * @var integer Authorization ID
     */
    public $LicenseId;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var array <li>InstanceID, IP,

and MachineName for fuzzy search</li>
     */
    public $Filters;

    /**
     * @var integer Limit number, 10 by default.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param integer $LicenseId Authorization ID
     * @param integer $LicenseType Authorization type
     * @param string $ResourceId Resource ID
     * @param array $Filters <li>InstanceID, IP,

and MachineName for fuzzy search</li>
     * @param integer $Limit Limit number, 10 by default.
     * @param integer $Offset Offset. Default value: 0.
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
