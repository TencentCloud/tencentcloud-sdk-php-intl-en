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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response structure for bulk adding records
 *
 * @method array getRecordList() Obtain See `RecordInfoBatchModify`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordList(array $RecordList) Set See `RecordInfoBatchModify`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Task ID
 * @method void setId(integer $Id) Set Task ID
 * @method string getDomain() Obtain Domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomainGrade() Obtain Domain level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainGrade(string $DomainGrade) Set Domain level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrMsg() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrMsg(string $ErrMsg) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperation() Obtain Operation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperation(string $Operation) Set Operation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainId() Obtain Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainId(integer $DomainId) Set Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ModifyRecordBatchDetail extends AbstractModel
{
    /**
     * @var array See `RecordInfoBatchModify`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordList;

    /**
     * @var integer Task ID
     */
    public $Id;

    /**
     * @var string Domain
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Domain level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainGrade;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrMsg;

    /**
     * @var string Task running status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Operation type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operation;

    /**
     * @var integer Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainId;

    /**
     * @param array $RecordList See `RecordInfoBatchModify`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Task ID
     * @param string $Domain Domain
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DomainGrade Domain level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrMsg Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task running status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Operation Operation type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainId Domain ID
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
        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new BatchRecordInfo();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
