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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Probe action.
 *
 * @method HTTPGetAction getHTTPGet() Obtain HTTP GET action.
 * @method void setHTTPGet(HTTPGetAction $HTTPGet) Set HTTP GET action.
 * @method ExecAction getExec() Obtain Executes check command action.
 * @method void setExec(ExecAction $Exec) Set Executes check command action.
 * @method TCPSocketAction getTCPSocket() Obtain TCP Socket check action.
 * @method void setTCPSocket(TCPSocketAction $TCPSocket) Set TCP Socket check action.
 * @method string getActionType() Obtain Probe type. The default value is HTTPGet. Valid values: HTTPGet, Exec, and TCPSocket.
 * @method void setActionType(string $ActionType) Set Probe type. The default value is HTTPGet. Valid values: HTTPGet, Exec, and TCPSocket.
 */
class ProbeAction extends AbstractModel
{
    /**
     * @var HTTPGetAction HTTP GET action.
     */
    public $HTTPGet;

    /**
     * @var ExecAction Executes check command action.
     */
    public $Exec;

    /**
     * @var TCPSocketAction TCP Socket check action.
     */
    public $TCPSocket;

    /**
     * @var string Probe type. The default value is HTTPGet. Valid values: HTTPGet, Exec, and TCPSocket.
     */
    public $ActionType;

    /**
     * @param HTTPGetAction $HTTPGet HTTP GET action.
     * @param ExecAction $Exec Executes check command action.
     * @param TCPSocketAction $TCPSocket TCP Socket check action.
     * @param string $ActionType Probe type. The default value is HTTPGet. Valid values: HTTPGet, Exec, and TCPSocket.
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
        if (array_key_exists("HTTPGet",$param) and $param["HTTPGet"] !== null) {
            $this->HTTPGet = new HTTPGetAction();
            $this->HTTPGet->deserialize($param["HTTPGet"]);
        }

        if (array_key_exists("Exec",$param) and $param["Exec"] !== null) {
            $this->Exec = new ExecAction();
            $this->Exec->deserialize($param["Exec"]);
        }

        if (array_key_exists("TCPSocket",$param) and $param["TCPSocket"] !== null) {
            $this->TCPSocket = new TCPSocketAction();
            $this->TCPSocket->deserialize($param["TCPSocket"]);
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
