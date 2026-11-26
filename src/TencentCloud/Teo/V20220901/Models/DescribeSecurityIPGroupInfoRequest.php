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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityIPGroupInfo request structure.
 *
 * @method string getZoneId() Obtain Site ID, used to specify the scope of the queried site.
 * @method void setZoneId(string $ZoneId) Set Site ID, used to specify the scope of the queried site.
 * @method integer getLimit() Obtain Maximum number of entries returned in a single response. Default value: 20. Maximum number of query entries: 1000.
 * @method void setLimit(integer $Limit) Set Maximum number of entries returned in a single response. Default value: 20. Maximum number of query entries: 1000.
 * @method integer getOffset() Obtain Starting entry offset for pagination queries. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting entry offset for pagination queries. Default value: 0.
 */
class DescribeSecurityIPGroupInfoRequest extends AbstractModel
{
    /**
     * @var string Site ID, used to specify the scope of the queried site.
     */
    public $ZoneId;

    /**
     * @var integer Maximum number of entries returned in a single response. Default value: 20. Maximum number of query entries: 1000.
     */
    public $Limit;

    /**
     * @var integer Starting entry offset for pagination queries. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $ZoneId Site ID, used to specify the scope of the queried site.
     * @param integer $Limit Maximum number of entries returned in a single response. Default value: 20. Maximum number of query entries: 1000.
     * @param integer $Offset Starting entry offset for pagination queries. Default value: 0.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
