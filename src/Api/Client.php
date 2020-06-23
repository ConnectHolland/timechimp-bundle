<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCustomers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetCustomers(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer|\Psr\Http\Message\ResponseInterface|null
     */
    public function createCustomer(\ConnectHolland\TimechimpBundle\Api\Model\Customer $customer, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateCustomer($customer), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateCustomer(\ConnectHolland\TimechimpBundle\Api\Model\Customer $customer, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateCustomer($customer), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCustomersByRelationId(string $relationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetCustomersByRelationId($relationId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCustomerByName(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetCustomerByName($name), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteCustomer(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteCustomer($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Customer|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCustomer(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetCustomer($id), $fetch);
    }

    /**
     * @param string $startDate Start date as string in format: YYYY-MM-DD
     * @param string $endDate   End date as string in format: YYYY-MM-DD
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExpensesByDateRange(string $startDate, string $endDate, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetExpensesByDateRange($startDate, $endDate), $fetch);
    }

    /**
     * @param int    $projectId Id of the project
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExpensesByProject(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetExpensesByProject($projectId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExpense(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetExpense($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteExpense(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteExpense($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExpenses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetExpenses(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense|\Psr\Http\Message\ResponseInterface|null
     */
    public function createExpense(\ConnectHolland\TimechimpBundle\Api\Model\Expense $expense, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateExpense($expense), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Expense|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateExpense(\ConnectHolland\TimechimpBundle\Api\Model\Expense $expense, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateExpense($expense), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Invoice[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getInvoices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetInvoices(), $fetch);
    }

    /**
     * @param string $startDate Start date as string in format: YYYY-MM-DD
     * @param string $endDate   End date as string in format: YYYY-MM-DD
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMileageByDateRange(string $startDate, string $endDate, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetMileageByDateRange($startDate, $endDate), $fetch);
    }

    /**
     * @param int    $projectId Id of the project
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMileageByProject(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetMileageByProject($projectId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMileage(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetMileage($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteMileage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteMileage($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMileages(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetMileages(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage|\Psr\Http\Message\ResponseInterface|null
     */
    public function createMileage(\ConnectHolland\TimechimpBundle\Api\Model\Mileage $mileage, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateMileage($mileage), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateMileage(\ConnectHolland\TimechimpBundle\Api\Model\Mileage $mileage, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateMileage($mileage), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProjectNote(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteProjectNote($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectNotes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjectNotes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProjectNote(\ConnectHolland\TimechimpBundle\Api\Model\ProjectNote $projectNote, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateProjectNote($projectNote), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProjectNote(\ConnectHolland\TimechimpBundle\Api\Model\ProjectNote $projectNote, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateProjectNote($projectNote), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectNote(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjectNote($id), $fetch);
    }

    /**
     * @param int    $projectId Id of the project
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectNotesByProject(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjectNotesByProject($projectId), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProject(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteProject($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjects(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjects(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProject(\ConnectHolland\TimechimpBundle\Api\Model\Project $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateProject($project), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProject(\ConnectHolland\TimechimpBundle\Api\Model\Project $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateProject($project), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProject(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProject($id), $fetch);
    }

    /**
     * @param int    $customerId Id of the customer
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectsByCustomer(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjectsByCustomer($customerId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\ProjectInsights|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectInsights(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetProjectInsights($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTag(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteTag($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Tag[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTags(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Tag|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTag(\ConnectHolland\TimechimpBundle\Api\Model\Tag $tag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateTag($tag), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Tag|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTag(\ConnectHolland\TimechimpBundle\Api\Model\Tag $tag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateTag($tag), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Tag|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTag($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTask(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteTask($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Task[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTasks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTasks(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Task|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTask(\ConnectHolland\TimechimpBundle\Api\Model\Task $task, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateTask($task), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Task|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTask(\ConnectHolland\TimechimpBundle\Api\Model\Task $task, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateTask($task), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Task|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTask(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTask($id), $fetch);
    }

    /**
     * @param string $startDate Start date as string in format: YYYY-MM-DD
     * @param string $endDate   End date as string in format: YYYY-MM-DD
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTimeByDateRange(string $startDate, string $endDate, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTimeByDateRange($startDate, $endDate), $fetch);
    }

    /**
     * @param int    $projectId Id of the project
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTimeByProject(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTimeByProject($projectId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTime(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTime($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var int $id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteTime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\DeleteTime($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getTimes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetTimes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTime(\ConnectHolland\TimechimpBundle\Api\Model\Time $time, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\CreateTime($time), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Time|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateTime(\ConnectHolland\TimechimpBundle\Api\Model\Time $time, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\UpdateTime($time), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function startTimer(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\StartTimer($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function stopTimer(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\StopTimer($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\GetUsers(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function putUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\PutUsers(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function me(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\TimechimpBundle\Api\Endpoint\Me(), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins    = [];
            $uri        = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.timechimp.com');
            $plugins[]  = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory  = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer     = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ConnectHolland\TimechimpBundle\Api\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
