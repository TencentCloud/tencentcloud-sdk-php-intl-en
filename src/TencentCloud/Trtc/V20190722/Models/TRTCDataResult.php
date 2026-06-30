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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC Data Dashboard/Real-Time Monitoring API output parameters
 *
 * @method integer getStatementID() Obtain The StatementID value is fixed as 0 in the monitoring dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatementID(integer $StatementID) Set The StatementID value is fixed as 0 in the monitoring dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSeries() Obtain Query result data is returned in Columns-Values format.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeries(array $Series) Set Query result data is returned in Columns-Values format.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain The Total value is fixed as 1 in the dashboard feature monitoring.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set The Total value is fixed as 1 in the dashboard feature monitoring.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TRTCDataResult extends AbstractModel
{
    /**
     * @var integer The StatementID value is fixed as 0 in the monitoring dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatementID;

    /**
     * @var array Query result data is returned in Columns-Values format.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Series;

    /**
     * @var integer The Total value is fixed as 1 in the dashboard feature monitoring.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @param integer $StatementID The StatementID value is fixed as 0 in the monitoring dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Series Query result data is returned in Columns-Values format.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Total The Total value is fixed as 1 in the dashboard feature monitoring.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StatementID",$param) and $param["StatementID"] !== null) {
            $this->StatementID = $param["StatementID"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new SeriesInfos();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
