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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomainErrorPageInfo request structure.
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getErrorNos() Obtain Original error code
 * @method void setErrorNos(array $ErrorNos) Set Original error code
 * @method string getBody() Obtain New response packet
 * @method void setBody(string $Body) Set New response packet
 * @method integer getNewErrorNo() Obtain New error code
 * @method void setNewErrorNo(integer $NewErrorNo) Set New error code
 * @method array getClearHeaders() Obtain Response header to be deleted
 * @method void setClearHeaders(array $ClearHeaders) Set Response header to be deleted
 * @method array getSetHeaders() Obtain Response header to be set
 * @method void setSetHeaders(array $SetHeaders) Set Response header to be set
 */
class CreateDomainErrorPageInfoRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Original error code
     */
    public $ErrorNos;

    /**
     * @var string New response packet
     */
    public $Body;

    /**
     * @var integer New error code
     */
    public $NewErrorNo;

    /**
     * @var array Response header to be deleted
     */
    public $ClearHeaders;

    /**
     * @var array Response header to be set
     */
    public $SetHeaders;

    /**
     * @param string $ListenerId Listener ID
     * @param string $Domain Domain name
     * @param array $ErrorNos Original error code
     * @param string $Body New response packet
     * @param integer $NewErrorNo New error code
     * @param array $ClearHeaders Response header to be deleted
     * @param array $SetHeaders Response header to be set
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ErrorNos",$param) and $param["ErrorNos"] !== null) {
            $this->ErrorNos = $param["ErrorNos"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("NewErrorNo",$param) and $param["NewErrorNo"] !== null) {
            $this->NewErrorNo = $param["NewErrorNo"];
        }

        if (array_key_exists("ClearHeaders",$param) and $param["ClearHeaders"] !== null) {
            $this->ClearHeaders = $param["ClearHeaders"];
        }

        if (array_key_exists("SetHeaders",$param) and $param["SetHeaders"] !== null) {
            $this->SetHeaders = [];
            foreach ($param["SetHeaders"] as $key => $value){
                $obj = new HttpHeaderParam();
                $obj->deserialize($value);
                array_push($this->SetHeaders, $obj);
            }
        }
    }
}
