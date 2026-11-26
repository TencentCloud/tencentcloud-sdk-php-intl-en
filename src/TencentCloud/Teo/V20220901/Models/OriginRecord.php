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
 * Origin server group records
 *
 * @method string getRecord() Obtain Origin server record value, excluding port information. It can be an IPv4 address, IPv6 address, or domain name format.
 * @method void setRecord(string $Record) Set Origin server record value, excluding port information. It can be an IPv4 address, IPv6 address, or domain name format.
 * @method string getType() Obtain Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, domain type origin server;</li>
<li>COS: COS origin.</li>
<li>AWS_S3: AWS S3 COS origin server.</li>
 * @method void setType(string $Type) Set Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, domain type origin server;</li>
<li>COS: COS origin.</li>
<li>AWS_S3: AWS S3 COS origin server.</li>
 * @method string getRecordId() Obtain Origin record ID.
 * @method void setRecordId(string $RecordId) Set Origin record ID.
 * @method integer getWeight() Obtain 【Origin server weight】: A parameter used to control traffic assignment priority. Value range: 0-100 (integer): <li>Empty value: No weight is set, and the system schedules traffic based on the default policy;</li><li>0: The weight is explicitly set to 0, and traffic will not be assigned to this origin server. Note: Make sure at least one origin server has a weight above 0;</li><li>Normal value: The larger the value, the more traffic is assigned;</li>
 * @method void setWeight(integer $Weight) Set 【Origin server weight】: A parameter used to control traffic assignment priority. Value range: 0-100 (integer): <li>Empty value: No weight is set, and the system schedules traffic based on the default policy;</li><li>0: The weight is explicitly set to 0, and traffic will not be assigned to this origin server. Note: Make sure at least one origin server has a weight above 0;</li><li>Normal value: The larger the value, the more traffic is assigned;</li>
 * @method boolean getPrivate() Obtain Whether to use private authentication. This parameter is valid only when RecordType is COS or AWS_S3. Valid values:
<li>true: Enable private authentication;</li>
<li>false: Do not use private authentication.</li>Not specified. Default value: false.

 * @method void setPrivate(boolean $Private) Set Whether to use private authentication. This parameter is valid only when RecordType is COS or AWS_S3. Valid values:
<li>true: Enable private authentication;</li>
<li>false: Do not use private authentication.</li>Not specified. Default value: false.

 * @method array getPrivateParameters() Obtain Private authentication parameter. Valid when the origin server type is Private=true.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameter. Valid when the origin server type is Private=true.
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string Origin server record value, excluding port information. It can be an IPv4 address, IPv6 address, or domain name format.
     */
    public $Record;

    /**
     * @var string Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, domain type origin server;</li>
<li>COS: COS origin.</li>
<li>AWS_S3: AWS S3 COS origin server.</li>
     */
    public $Type;

    /**
     * @var string Origin record ID.
     */
    public $RecordId;

    /**
     * @var integer 【Origin server weight】: A parameter used to control traffic assignment priority. Value range: 0-100 (integer): <li>Empty value: No weight is set, and the system schedules traffic based on the default policy;</li><li>0: The weight is explicitly set to 0, and traffic will not be assigned to this origin server. Note: Make sure at least one origin server has a weight above 0;</li><li>Normal value: The larger the value, the more traffic is assigned;</li>
     */
    public $Weight;

    /**
     * @var boolean Whether to use private authentication. This parameter is valid only when RecordType is COS or AWS_S3. Valid values:
<li>true: Enable private authentication;</li>
<li>false: Do not use private authentication.</li>Not specified. Default value: false.

     */
    public $Private;

    /**
     * @var array Private authentication parameter. Valid when the origin server type is Private=true.
     */
    public $PrivateParameters;

    /**
     * @param string $Record Origin server record value, excluding port information. It can be an IPv4 address, IPv6 address, or domain name format.
     * @param string $Type Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, domain type origin server;</li>
<li>COS: COS origin.</li>
<li>AWS_S3: AWS S3 COS origin server.</li>
     * @param string $RecordId Origin record ID.
     * @param integer $Weight 【Origin server weight】: A parameter used to control traffic assignment priority. Value range: 0-100 (integer): <li>Empty value: No weight is set, and the system schedules traffic based on the default policy;</li><li>0: The weight is explicitly set to 0, and traffic will not be assigned to this origin server. Note: Make sure at least one origin server has a weight above 0;</li><li>Normal value: The larger the value, the more traffic is assigned;</li>
     * @param boolean $Private Whether to use private authentication. This parameter is valid only when RecordType is COS or AWS_S3. Valid values:
<li>true: Enable private authentication;</li>
<li>false: Do not use private authentication.</li>Not specified. Default value: false.

     * @param array $PrivateParameters Private authentication parameter. Valid when the origin server type is Private=true.
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Private",$param) and $param["Private"] !== null) {
            $this->Private = $param["Private"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }
    }
}
