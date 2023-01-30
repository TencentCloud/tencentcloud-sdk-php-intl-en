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
 * DescribeSecLogAlertMsg request structure.
 *
 * @method array getType() Obtain Alert type
Log storage alert: log_reserve_full
Log storage period alert: log_save_day_limit
Unavailable Kafka instance/public domain name: kafka_instance_domain_unavailable
Incorrect Kafka username/password: kafka_user_passwd_wrong
Kafka backend error field: kafka_field_wrong
 * @method void setType(array $Type) Set Alert type
Log storage alert: log_reserve_full
Log storage period alert: log_save_day_limit
Unavailable Kafka instance/public domain name: kafka_instance_domain_unavailable
Incorrect Kafka username/password: kafka_user_passwd_wrong
Kafka backend error field: kafka_field_wrong
 */
class DescribeSecLogAlertMsgRequest extends AbstractModel
{
    /**
     * @var array Alert type
Log storage alert: log_reserve_full
Log storage period alert: log_save_day_limit
Unavailable Kafka instance/public domain name: kafka_instance_domain_unavailable
Incorrect Kafka username/password: kafka_user_passwd_wrong
Kafka backend error field: kafka_field_wrong
     */
    public $Type;

    /**
     * @param array $Type Alert type
Log storage alert: log_reserve_full
Log storage period alert: log_save_day_limit
Unavailable Kafka instance/public domain name: kafka_instance_domain_unavailable
Incorrect Kafka username/password: kafka_user_passwd_wrong
Kafka backend error field: kafka_field_wrong
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
