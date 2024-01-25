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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC Data Dashboard/Real-Time Monitoring API output parameters
 *
 * @method integer getStatementID() Obtain StatementID value, fixed at 0 for Monitoring Dashboard.
 * @method void setStatementID(integer $StatementID) Set StatementID value, fixed at 0 for Monitoring Dashboard.
 * @method array getSeries() Obtain Query result data, returned in Columns-Values format.
 * @method void setSeries(array $Series) Set Query result data, returned in Columns-Values format.
 * @method integer getTotal() Obtain Total value, fixed at 1 for Monitoring Dashboard.
 * @method void setTotal(integer $Total) Set Total value, fixed at 1 for Monitoring Dashboard.
 */
class TRTCDataResult extends AbstractModel
{
    /**
     * @var integer StatementID value, fixed at 0 for Monitoring Dashboard.
     */
    public $StatementID;

    /**
     * @var array Query result data, returned in Columns-Values format.
     */
    public $Series;

    /**
     * @var integer Total value, fixed at 1 for Monitoring Dashboard.
     */
    public $Total;

    /**
     * @param integer $StatementID StatementID value, fixed at 0 for Monitoring Dashboard.
     * @param array $Series Query result data, returned in Columns-Values format.
     * @param integer $Total Total value, fixed at 1 for Monitoring Dashboard.
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
