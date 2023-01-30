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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogCleanSettingInfo response structure.
 *
 * @method integer getReservesLimit() Obtain Minimum storage for triggering clearing
 * @method void setReservesLimit(integer $ReservesLimit) Set Minimum storage for triggering clearing
 * @method integer getReservesDeadline() Obtain Storage limit for stopping clearing
 * @method void setReservesDeadline(integer $ReservesDeadline) Set Storage limit for stopping clearing
 * @method integer getDayLimit() Obtain Storage period for triggering clearing
 * @method void setDayLimit(integer $DayLimit) Set Storage period for triggering clearing
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecLogCleanSettingInfoResponse extends AbstractModel
{
    /**
     * @var integer Minimum storage for triggering clearing
     */
    public $ReservesLimit;

    /**
     * @var integer Storage limit for stopping clearing
     */
    public $ReservesDeadline;

    /**
     * @var integer Storage period for triggering clearing
     */
    public $DayLimit;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ReservesLimit Minimum storage for triggering clearing
     * @param integer $ReservesDeadline Storage limit for stopping clearing
     * @param integer $DayLimit Storage period for triggering clearing
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ReservesLimit",$param) and $param["ReservesLimit"] !== null) {
            $this->ReservesLimit = $param["ReservesLimit"];
        }

        if (array_key_exists("ReservesDeadline",$param) and $param["ReservesDeadline"] !== null) {
            $this->ReservesDeadline = $param["ReservesDeadline"];
        }

        if (array_key_exists("DayLimit",$param) and $param["DayLimit"] !== null) {
            $this->DayLimit = $param["DayLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
