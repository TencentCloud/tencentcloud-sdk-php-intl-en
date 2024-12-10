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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target instance information, which is correlated with the migration task type
 *
 * @method string getRegion() Obtain Target instance region, such as ap-guangzhou
 * @method void setRegion(string $Region) Set Target instance region, such as ap-guangzhou
 * @method string getInstanceId() Obtain Target instance ID, such as cdb-jd92ijd8
 * @method void setInstanceId(string $InstanceId) Set Target instance ID, such as cdb-jd92ijd8
 * @method string getIp() Obtain Target instance VIP, which has been disused and does not need to be entered
 * @method void setIp(string $Ip) Set Target instance VIP, which has been disused and does not need to be entered
 * @method integer getPort() Obtain Target instance Vport, which has been disused and does not need to be entered
 * @method void setPort(integer $Port) Set Target instance Vport, which has been disused and does not need to be entered
 * @method integer getReadOnly() Obtain Only valid for MySQL currently. For instance-level migration, the value range is: 1 (read-only), 0 (read/write)
 * @method void setReadOnly(integer $ReadOnly) Set Only valid for MySQL currently. For instance-level migration, the value range is: 1 (read-only), 0 (read/write)
 * @method string getUser() Obtain Target database account
 * @method void setUser(string $User) Set Target database account
 * @method string getPassword() Obtain Target database password
 * @method void setPassword(string $Password) Set Target database password
 */
class DstInfo extends AbstractModel
{
    /**
     * @var string Target instance region, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string Target instance ID, such as cdb-jd92ijd8
     */
    public $InstanceId;

    /**
     * @var string Target instance VIP, which has been disused and does not need to be entered
     */
    public $Ip;

    /**
     * @var integer Target instance Vport, which has been disused and does not need to be entered
     */
    public $Port;

    /**
     * @var integer Only valid for MySQL currently. For instance-level migration, the value range is: 1 (read-only), 0 (read/write)
     */
    public $ReadOnly;

    /**
     * @var string Target database account
     */
    public $User;

    /**
     * @var string Target database password
     */
    public $Password;

    /**
     * @param string $Region Target instance region, such as ap-guangzhou
     * @param string $InstanceId Target instance ID, such as cdb-jd92ijd8
     * @param string $Ip Target instance VIP, which has been disused and does not need to be entered
     * @param integer $Port Target instance Vport, which has been disused and does not need to be entered
     * @param integer $ReadOnly Only valid for MySQL currently. For instance-level migration, the value range is: 1 (read-only), 0 (read/write)
     * @param string $User Target database account
     * @param string $Password Target database password
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
