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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaunchConfigurations request structure.
 *
 * @method array getLaunchConfigurationIds() Obtain Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method void setLaunchConfigurationIds(array $LaunchConfigurationIds) Set Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method array getFilters() Obtain Filter.
<li> launch-configuration-id - String - Required: No - (Filter) Filter by launch configuration ID.</li>
<li> launch-configuration-name - String - Required: No - (Filter) Filter by launch configuration name.</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) Set Filter.
<li> launch-configuration-id - String - Required: No - (Filter) Filter by launch configuration ID.</li>
<li> launch-configuration-name - String - Required: No - (Filter) Filter by launch configuration name.</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
 */
class DescribeLaunchConfigurationsRequest extends AbstractModel
{
    /**
     * @var array Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     */
    public $LaunchConfigurationIds;

    /**
     * @var array Filter.
<li> launch-configuration-id - String - Required: No - (Filter) Filter by launch configuration ID.</li>
<li> launch-configuration-name - String - Required: No - (Filter) Filter by launch configuration name.</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     */
    public $Offset;

    /**
     * @param array $LaunchConfigurationIds Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     * @param array $Filters Filter.
<li> launch-configuration-id - String - Required: No - (Filter) Filter by launch configuration ID.</li>
<li> launch-configuration-name - String - Required: No - (Filter) Filter by launch configuration name.</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://cloud.tencent.com/document/api/213/15688).
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
        if (array_key_exists("LaunchConfigurationIds",$param) and $param["LaunchConfigurationIds"] !== null) {
            $this->LaunchConfigurationIds = $param["LaunchConfigurationIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
