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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertChannel request structure.
 *
 * @method string getNoticeId() Obtain The NoticeId of alarm notification template in the monitor service, can be obtained from the Id field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or NoticeId can be used to identify an alarm notification template.)
 * @method void setNoticeId(string $NoticeId) Set The NoticeId of alarm notification template in the monitor service, can be obtained from the Id field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or NoticeId can be used to identify an alarm notification template.)
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getAMPConsumerId() Obtain The AMPConsumerId of alarm notification template for monitor service, can be obtained from the AMPConsumerId field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or Noticeid can be used to identify an alarm notification template.)
 * @method void setAMPConsumerId(string $AMPConsumerId) Set The AMPConsumerId of alarm notification template for monitor service, can be obtained from the AMPConsumerId field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or Noticeid can be used to identify an alarm notification template.)
 */
class CreateAlertChannelRequest extends AbstractModel
{
    /**
     * @var string The NoticeId of alarm notification template in the monitor service, can be obtained from the Id field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or NoticeId can be used to identify an alarm notification template.)
     */
    public $NoticeId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string The AMPConsumerId of alarm notification template for monitor service, can be obtained from the AMPConsumerId field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or Noticeid can be used to identify an alarm notification template.)
     */
    public $AMPConsumerId;

    /**
     * @param string $NoticeId The NoticeId of alarm notification template in the monitor service, can be obtained from the Id field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or NoticeId can be used to identify an alarm notification template.)
     * @param string $ProjectId Project ID.
     * @param string $AMPConsumerId The AMPConsumerId of alarm notification template for monitor service, can be obtained from the AMPConsumerId field in the response of the DescribeAlarmNotices API of the monitor service's cloud API. (In the input parameters of the CreateAlertChannel API, either AMPConsumerId or Noticeid can be used to identify an alarm notification template.)
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }
    }
}
